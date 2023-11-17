@extends('layouts.app')

@section('title', 'Class Page')

@section('content')
<div class="right-content">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="left-header">
                <h3>Class Page</h3>
                <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="right">
                    <i class="fa fa-question-circle tooltip-icon"></i>
                </span>
            </div>
        </div>
        <div class="col-lg-8">
            <div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="top-box bg-white d-flex">
                            <div class="top-icon-box">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <input type="text" class="top-search-input" placeholder="Search Class, Documents, Activities... ">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="top-box bg-white d-flex flex-wrap justify-content-between align-items-center" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="top-icon-box-fade">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <div class="pl-2">
                                    <p class="class-name">Class 11</p>
                                    <p class="total-student">Total Students 40</p>
                                </div>
                            </div>
                            <div class="top-icon-box">
                                <i class="fa-solid fa-angle-down"></i>
                            </div>
                        </div>
                        <div class="dropdown-menu custom-drop" aria-labelledby="dropdownMenuButton">
                            <p class="mb-3">Classes</p>

                            <div class="cls-menu">
                                <div class="cls-menu-item mb-2 pointer">
                                    <p class="class-name">Class 11</p>
                                    <p class="total-student">Total Students 40</p>
                                </div>
                                <div class="cls-menu-item mb-2 pointer">
                                    <p class="class-name">Class 12</p>
                                    <p class="total-student">Total Students 60</p>
                                </div>
                                <div class="cls-menu-item mb-2 pointer">
                                    <p class="class-name">Class 10</p>
                                    <p class="total-student">Total Students 35</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-box">
        <div class="row">
            <div class="col-lg-4">
                <div class="class-page">
                    <div class="gray-box">
                        <div class="row m-2">
                            <div class="col-md-8">
                                <h5 class="font-weight-bold">Class XII</h5>
                            </div>
                            <div class="col-md-4">
                                <div class="download_btn">
                                    Report
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p>Number of students: 24</p>
                                <p>Dominant Skills: </p>
                            </div>
                            <div class="col-md-6">
                                <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_motive_hexa.png');">
                                    <img src="/assets/teacher_dashboard_new/d_skills/motive.png" style="width: 50%;">
                                </div>
                                <p class="skill" style="color:#c00000;">Motive</p>
                            </div>
                            <div class="col-md-6">
                                <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_emotive_hexa.png');">
                                    <img src="/assets/teacher_dashboard_new/d_skills/emotive.png" style="width: 50%;">
                                </div>
                                <p class="skill" style="color:#6FAC45;">Creative</p>
                            </div>
                            <div class="col-md-6">
                                <p class="top-text">Top Character</p>
                                <div class="purple-box">
                                    <div class="white-box">
                                        <span>Dreamer</span>
                                        <img class="img-fluid" src="/assets/teacher_dashboard_new/character.png">
                                    </div>
                                    <h3 class="font-weight-bold">32</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="top-text">Top Interest</p>
                                <div class="blue-box">
                                    <div class="white-box">
                                        <span>Art & Craft</span>
                                        <img class="img-fluid" src="/assets/teacher_dashboard_new/interest/art.png">
                                    </div>
                                    <h3 class="font-weight-bold">32</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="class-page">
                    <div class="gray-box">
                        <div class="row m-2">
                            <div class="col-md-8">
                                <h5 class="font-weight-bold">Class XII</h5>
                            </div>
                            <div class="col-md-4">
                                <div class="download_btn">
                                    Report
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p>Number of students: 24</p>
                                <p>Dominant Skills: </p>
                            </div>
                            <div class="col-md-6">
                                <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_cognitive_hexa.png');">
                                    <img src="/assets/teacher_dashboard_new/d_skills/cognitive.png" style="width: 50%;">
                                </div>
                                <p class="skill" style="color:#2D5597;">Cognitive</p>
                            </div>
                            <div class="col-md-6">
                                <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_adaptive_hexa.png');">
                                    <img src="/assets/teacher_dashboard_new/d_skills/adaptive.png" style="width: 50%;">
                                </div>
                                <p class="skill" style="color:#ffc000;">Adaptive</p>
                            </div>
                            <div class="col-md-6">
                                <p class="top-text">Top Character</p>
                                <div class="purple-box">
                                    <div class="white-box">
                                        <span>Dreamer</span>
                                        <img class="img-fluid" src="/assets/teacher_dashboard_new/character.png">
                                    </div>
                                    <h3 class="font-weight-bold">32</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="top-text">Top Interest</p>
                                <div class="blue-box">
                                    <div class="white-box">
                                        <span>Art & Craft</span>
                                        <img class="img-fluid" src="/assets/teacher_dashboard_new/interest/art.png">
                                    </div>
                                    <h3 class="font-weight-bold">32</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-space"></div>
    </div>
</div>
@endsection