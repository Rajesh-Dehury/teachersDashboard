<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassswordMail;
use App\Models\TeacherUser;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class TeacherAuthController extends Controller
{
    public function loginView()
    {
        return view('teacher_login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:teacher_users,email',
            'password' => 'required',
        ]);

        if (Auth::guard('teacher_user')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('teacher.dashboard');
        }

        return redirect()
            ->back()
            ->withErrors(['email' => 'Invalid Credentials.'])
            ->withInput();
    }


    public function logout()
    {
        Auth::guard('teacher_user')->logout();
        return redirect()->route('teacher.login');
    }


    public function forgotPasswordView()
    {
        return view('teacher_forgot_password');
    }


    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:teacher_users,email',
        ]);

        $teacher_user = TeacherUser::where('email', $request->email)->first();
        $forgot_password = Str::random(20);

        $teacher_user->update([
            'forgot_password' => $forgot_password,
        ]);

        try {
            $data = [
                'forgot_password' => $forgot_password,
                'teacher_user' => $teacher_user,
                'link' => route('teacher.forgot.link', ['link' => $forgot_password, 'id' => $teacher_user->id]),
            ];

            Mail::to('test@gmail.com')->send(new ForgotPassswordMail($data));
        } catch (Exception $e) {
        }

        return back()->with('message', "Please check your email.");
    }


    public function forgotPasswordViewLink()
    {
        $teacher_user_id = request('id');
        $teacher_user_link = request('link');

        $teacher_user = TeacherUser::find($teacher_user_id);

        if ($teacher_user->forgot_password == $teacher_user_link) {
            return view('teacher_forgot_link', ['email' => $teacher_user->email, 'forgot_password' => $teacher_user->forgot_password]);
        } else {
            abort(404);
        }
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'password_confermation' => 'required|same:password'
        ]);

        $teacher_user = TeacherUser::where('email', $request->email)->first();

        if ($teacher_user) {
            if ($teacher_user->forgot_password == $request->forgot_password) {
                $teacher_user->update(
                    [
                        'password' => Hash::make($request->password),
                        'forgot_password' => null,
                    ]
                );

                return redirect()->route('teacher.login');
            } else {
                abort(404);
            }
        }
        return back();
    }

    public function dashboard()
    {
        return view('teacher_dashboard');
    }
}
