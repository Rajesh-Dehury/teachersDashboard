<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <title>@yield('title','Dashboard')</title>

    {{-- daterange picker --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    {{-- candleStick chart --}}
    <script src="https://unpkg.com/chart.js@3"></script>
    <script src="https://unpkg.com/@sgratzl/chartjs-chart-boxplot@3"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/luxon/2.0.1/luxon.min.js" integrity="sha512-bI2nHaBnCCpELzO7o0RB58ULEQuWW9HRXP/qyxg/u6WakLJb6wz0nVR9dy0bdKKGo0qOBa3s8v9FGv54Mbp3aA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-chart-box-and-violin-plot/4.0.0/Chart.BoxPlot.min.js" integrity="sha512-z2lEnxnLHbu/Vp4PxvIyCCy/QX1mmq2ocpgqTf50xeSDn35VTra3gUi7Qs53qSLj99aJ9SMtqP08UFt+lJmHxA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@0.2.1"></script>
    <script src="https://www.chartjs.org/chartjs-chart-financial/chartjs-chart-financial.js"></script>
    <script src="https://cdnjs.cloudfare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script> -->


    {{-- owl carousel --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>


    {{-- ck editor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>


    <link rel="stylesheet" href="/css/new_td.css">
    <link rel="stylesheet" href="/css/td_student.css">

    @stack('css')


</head>

<body>
    <div class="td-box">
        @include('layouts.side-nav')

        @yield('content')
    </div>

    @stack('script')
</body>

</html>