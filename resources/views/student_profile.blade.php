@extends('layouts.app')

@section('title', 'Student Profile')

@push('css')
<link rel="stylesheet" href="/css/td_view_profile.css">
<link rel="stylesheet" href="/css/mytest.css">
@endpush

@section('content')
<div class="right-content">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="left-header">
                <h3>Class 11<br>Student's Profile</h3>
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
    <div class="row">
        <div class="col-lg-3">
            <div id="profile_timeline">
                <div class="row">
                    <div class="col-md-12 p-4">
                        <div class="download_btn">
                            Download Summary Report
                        </div>
                    </div>
                </div>
            </div>
            <div id="profile_timeline">
                <div class="row">
                    <div class="col-md-12 p-4">
                        <div class="download_btn">
                            Admission Corner
                        </div>
                    </div>
                </div>
            </div>
            <div id="profile_timeline">
                <div class="row">
                    <div class="col-lg-10">
                        <p class="heading-section">Neel’s Life<b>Line</b>
                            <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="top">
                                <i class="fa fa-question-circle heading-question-icon"></i>
                            </span>
                        </p>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <div class="row example-split" id="lifeline_timeline">
                    <div class="col-lg-12">
                        <ul class="timeline timeline-split" id="life_line_tour">
                            <li class="timeline-item">
                                <div class="timeline-info">
                                    <span>2019</span>
                                </div>
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <p class="timeline-title-headline">October, 2019</p>
                                    <p style="margin-bottom: 0rem;">Working as designer</p>
                                    <p style="float: right; margin-bottom: 0;">
                                        &nbsp;
                                        <span class="lifeline_edit_delete" data-id="18626" style="display: none;"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                    </p>
                                    <p style="float: right; margin-bottom: 0;">
                                        &nbsp;
                                        <span class="lifeline_edit" data-id="18626" style="display: none;"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                    </p>
                                    <div style="clear: both;"></div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-info">
                                    <span>2019</span>
                                </div>
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <p class="timeline-title-headline">September,2019
                                    </p>
                                    <p style="margin-bottom: 0rem;">Working with team</p>
                                    <p style="float: right; margin-bottom: 0;">
                                        &nbsp;
                                        <span class="lifeline_edit_delete" data-id="18628" style="display: none;"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                    </p>
                                    <p style="float: right; margin-bottom: 0;">
                                        &nbsp;
                                        <span class="lifeline_edit" data-id="18628" style="display: none;"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                    </p>
                                    <div style="clear: both;"></div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-info">
                                    <span>2018</span>
                                </div>
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <p class="timeline-title-headline">April,2018
                                    </p>
                                    <p style="margin-bottom: 0rem;">Working with team for new project</p>
                                    <p style="float: right; margin-bottom: 0;">
                                        &nbsp;
                                        <span class="lifeline_edit_delete" data-id="18628" style="display: none;"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                    </p>
                                    <p style="float: right; margin-bottom: 0;">
                                        &nbsp;
                                        <span class="lifeline_edit" data-id="18628" style="display: none;"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                    </p>
                                    <div style="clear: both;"></div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-info">
                                    <span>2018</span>
                                </div>
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <p class="timeline-title-headline">April,2018
                                    </p>
                                    <p style="margin-bottom: 0rem;">Working with team for project XXX</p>
                                    <p style="float: right; margin-bottom: 0;">
                                        &nbsp;
                                        <span class="lifeline_edit_delete" data-id="18628" style="display: none;"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                    </p>
                                    <p style="float: right; margin-bottom: 0;">
                                        &nbsp;
                                        <span class="lifeline_edit" data-id="18628" style="display: none;"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                    </p>
                                    <div style="clear: both;"></div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-info">
                                    <span>2017</span>
                                </div>
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <p class="timeline-title-headline">April,2017
                                    </p>
                                    <p style="margin-bottom: 0rem;">Joined the New Workplace</p>
                                    <p style="float: right; margin-bottom: 0;">
                                        &nbsp;
                                        <span class="lifeline_edit_delete" data-id="18628" style="display: none;"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                    </p>
                                    <p style="float: right; margin-bottom: 0;">
                                        &nbsp;
                                        <span class="lifeline_edit" data-id="18628" style="display: none;"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                    </p>
                                    <div style="clear: both;"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="profile_timeline">
                <div class="user-chart">
                    <div id="userChart">
                        <div id="fidelity_chart_tour" style="margin: 0 15px;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="heading-section oricheck-text">Originality Check
                                        <span style="text-align: start;" data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="top">
                                            <i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i>
                                        </span>
                                    </p>
                                    <p>We've identified potential plagiarism in user entries. Please review and take appropriate action.</p>
                                    <div style="clear: both;"></div>
                                </div>
                            </div>
                            <div id="chartjs-radar" style="height: 100%; width: 100%; margin-top: -50px;">
                                <canvas id="fidelity_canvas" style="display: block; width: 130px; height: 130px;">
                                </canvas>
                                <script src="https://cdnjs.cloudfare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
                                <script>
                                    const data = {
                                        labels: '',
                                        datasets: [{
                                            data: [5, 5, 5],
                                            backgroundColor: [
                                                '#E5E5E5',
                                                '#B68BF9',
                                                '#8950E1'
                                                // 'rgba(137, 80, 225, 0.8)',
                                            ],
                                            needleValue: 50,
                                            borderColor: '#fff',
                                            borderWidth: 1,
                                            cutout: '50%',
                                            circumference: 180,
                                            rotation: 270,
                                        }]
                                    };
                                    // needel block 
                                    const gaugeNeedle = {
                                        id: 'gaugeNeedle',
                                        afterDatasetDraw(chart, args, options) {
                                            const {
                                                ctx,
                                                config,
                                                data,
                                                chartArea: {
                                                    top,
                                                    bottom,
                                                    left,
                                                    right,
                                                    width,
                                                    height
                                                }
                                            } = chart;
                                            ctx.save();
                                            const needleValue = data.datasets[0].needleValue;
                                            const dataTotal = data.datasets[0].data.reduce((a, b) => a + b, 0);
                                            const angle = Math.PI + (1 / dataTotal * needleValue * Math.PI);
                                            const cx = width / 2;
                                            const cy = chart._metasets[0].data[0].y;

                                            // needel
                                            ctx.translate(cx, cy);
                                            ctx.rotate(angle);
                                            ctx.beginPath();
                                            ctx.moveTo(0, -10);
                                            ctx.lineTo(height - (ctx.canvas.offsetTop - 150), 0);
                                            ctx.lineTo(0, 10);
                                            ctx.fillStyle = '#fff';
                                            ctx.fill();
                                            ctx.restore();
                                            //needel dot 
                                            // ctx.translate(-cx, -cy);
                                            ctx.beginPath();
                                            ctx.arc(cx, cy, 0, 0, 10);
                                            ctx.fill();
                                            ctx.fillStyle = '#fff';
                                            ctx.restore();

                                            ctx.font = '38px Helvetica';
                                            ctx.fillStyle = 'rgba(137, 80, 225, 0.8)';
                                            ctx.fillText(needleValue + '%', cx, cy + 50);
                                            ctx.textAlign = 'center';
                                            ctx.restore();
                                        }
                                    }

                                    const config = {
                                        type: 'doughnut',
                                        data,
                                        options: {
                                            plugins: {
                                                tooltip: {
                                                    enabled: false,
                                                },
                                            },
                                        },
                                        plugins: [gaugeNeedle]
                                    };
                                    const myChart = new Chart(
                                        document.getElementById('fidelity_canvas'),
                                        config
                                    );
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="profile_timeline" class="top-character box profile-page">
                <div class="row">
                    <div class="col-md-12">
                        <p>Top Character
                            <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="top">
                                <i class="fa fa-question-circle tooltip-icon"></i>
                            </span>
                        </p>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel new-carousel">
                            <div class="item gray-box">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="character-box">
                                            <img src="/assets/teacher_dashboard_new/character.png">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="character-text">
                                            <h4>Dreamer <span style="float: right;">32</span></h4>
                                            <p>Students in this class are both emotive and creative. They have a strong understanding of their feelings and are able to recognise and effectively manage their emotions. They are also able to generate ideas and solutions for unique problems through new, out of the box perspectives.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item gray-box">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="character-box">
                                            <img src="/assets/teacher_dashboard_new/character.png">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="character-text">
                                            <h4>Dreamer <span style="float: right;">32</span></h4>
                                            <p>Students in this class are both emotive and creative. They have a strong understanding of their feelings and are able to recognise and effectively manage their emotions. They are also able to generate ideas and solutions for unique problems through new, out of the box perspectives.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div id="profile_timeline" class="p-4">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="profile-section">
                            <div class="hexagon_profile image_profile"></div>
                        </div>
                        <div class="hex-rect py-1 text-center text_color_bg">
                            <p class="text_color_bg">Diamond-2</p>
                            <input type="hidden" name="user_game_level" id="user_game_level" value="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="dashboard_profile_section">
                                    <h3>Neel Patel</h3>
                                    <div class="description">
                                        <p>#hardworking #tester</p>
                                    </div>
                                    <div class="info">
                                        <div class="profile_details">
                                            <i class="fa-solid fa-location-dot"></i> <span>India</span>
                                        </div>
                                        <div class="profile_details">
                                            <i class="fa-regular fa-clock"></i>
                                            <span>
                                                16 years old
                                            </span>
                                        </div>
                                        <div class="profile_details">
                                            <i class="fa-solid fa-message"></i>
                                            <span>English, Indonesian</span>
                                        </div>
                                    </div>
                                    {{-- changes in badges --}}
                                    <div class="badges row">
                                        <div class="col-sm-4">
                                            <div class="small-hex">
                                                <div class="small-hex-background">
                                                    <img src="/assets/gems/strengths_unlocked.png">
                                                </div>
                                            </div>
                                            <div class="small-hex-rect text-center">
                                                <p class="lifestrength_data">35</p>
                                            </div>
                                            <div class="small-text">Strengths Unlocked</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="small-hex">
                                                <div class="small-hex-background">
                                                    <img src="/assets/gems/task_completed.png">
                                                </div>
                                            </div>
                                            <div class="small-hex-rect text-center">
                                                <p class="">6</p>
                                            </div>
                                            <div class="small-text">Task Completed</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="small-hex">
                                                <div class="small-hex-background">
                                                    <img src="assets/gems/total_entries.png">
                                                </div>
                                            </div>
                                            <div class="small-hex-rect text-center">
                                                <p class="total_enteries">38</p>
                                            </div>
                                            <div class="small-text">Total Entries</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 graph user-chart-border" id="desktop_radar">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="heading-section">Neel Patel's Life<b>Powers</b>
                                    <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="bottom">
                                        <i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i>
                                    </span>
                                </p>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                        <div class="user-chart">
                            <div id="userChart">
                                <div id="lifepower_tour" style="margin: 0 15px;">
                                    <div id="chartjs-radar" style="height: 100%; width: 100%; margin: 10px auto;">
                                        <canvas id="canvas" style="display: block; width: 130px; height: 130px;">
                                        </canvas>
                                        <script src="https://cdnjs.cloudfare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
                                        <script>
                                            const dataSpider = {
                                                labels: ["Cognitive", "Interactive", "Emotive", "Adaptive", "Creative", "Motive"],
                                                datasets: [{
                                                    label: "",
                                                    fill: true,
                                                    backgroundColor: 'rgba(55, 84, 146, 0.2)',
                                                    borderColor: 'rgb(55, 84, 146)',
                                                    pointBackgroundColor: 'rgb(55, 84, 146)',
                                                    pointHoverBorderColor: 'rgb(55, 84, 146)',
                                                    data: [40, 50, 39, 11, 55, 30],
                                                }]
                                            };
                                            const configSpider = {
                                                type: 'radar',
                                                data: dataSpider,
                                                options: {
                                                    scales: {
                                                        r: {
                                                            max: 100,
                                                            min: 0,
                                                            ticks: {
                                                                stepSize: 20
                                                            },
                                                            pointLabels: {
                                                                color: ['#2d5597', '#5b9bd5', '#70ad47', '#ffc000', '#ed7d31', '#c00000']
                                                            }
                                                        }
                                                    }
                                                }
                                            };

                                            const myChartSpider = new Chart(
                                                document.getElementById('canvas'),
                                                configSpider
                                            );
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div id="profile_timeline">
                        <div class="skill_box p-1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="heading-section"><b>Dominant Skills</b>
                                        <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="bottom">
                                            <i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i>
                                        </span>
                                    </p>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="hex-strength" style="background-image: url('/assets/teachers/d_skills/d_creative_hexa.png');width: 180px; height: 180px;">
                                        <img src="/assets/teachers/d_skills/creative.png" style="width: 50%;">
                                    </div>
                                    <p class="text-center skill" style="color:#ed7d31;">Creative</p>
                                </div>
                                <div class="col">
                                    <div class="hex-strength" style="background-image: url('/assets/teachers/d_skills/d_interactive_hexa.png');width: 180px; height: 180px;">
                                        <img src="/assets/teachers/d_skills/interactive.png" style="width: 50%;">
                                    </div>
                                    <p class="text-center skill" style="color: #5b9bd5;">Interactive</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="dom-skill-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="profile_timeline">
                        <div class="skill_box p-1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="heading-section"><b>Developing Skills</b>
                                        <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="bottom">
                                            <i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i>
                                        </span>
                                    </p>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="hex-strength" style="background-image: url('/assets/teachers/d_skills/d_adaptive_hexa.png');width: 180px; height: 180px;">
                                        <img src="/assets/teachers/d_skills/adaptive.png" style="width: 50%;">
                                    </div>
                                    <p class="text-center skill" style="color: #ffc000;">Adaptive</p>
                                </div>
                                <div class="col">
                                    <div class="hex-strength" style="background-image: url('/assets/teachers/d_skills/d_motive_hexa.png');width: 180px; height: 180px;">
                                        <img src="/assets/teachers/d_skills/motive.png" style="width: 50%;">
                                    </div>
                                    <p class="text-center skill" style="color: #C00000;">Motive</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="dom-skill-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="profile_timeline">
                <div class="row">
                    <div class="col-lg-10">
                        <p class="heading-section">Top 10 Life<b>Strengths</b>
                            <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="top">
                                <i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i>
                            </span>
                        </p>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <div id="life_strengths_tour">
                    <ul id="hexGrid">
                        <li class="hex-list">
                            <div class="hex">
                                <div class="hexIn">
                                    <a class="hexLink   hexa_bg_Interactive " href="javascript:void(0);">
                                        <img src=" https://lifevitae.co/assets/img/strength/2.03 Valuing relationships.png ">
                                        <p>Valuing Relationships</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="hex-list">
                            <div class="hex">
                                <div class="hexIn">
                                    <a class="hexLink   hexa_bg_Interactive " href="javascript:void(0);">
                                        <img src=" https://lifevitae.co/assets/img/strength/2.01 Collaborating.png ">
                                        <p>Collaborating</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="hex-list">
                            <div class="hex">
                                <div class="hexIn">
                                    <a class="hexLink   hexa_bg_Cognitive " href="javascript:void(0);">
                                        <img src=" https://lifevitae.co/assets/img/strength/1.06 Thinking Ahead.png ">
                                        <p>Thinking ahead</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="hex-list">
                            <div class="hex">
                                <div class="hexIn">
                                    <a class="hexLink   hexa_bg_Cognitive " href="javascript:void(0);">
                                        <img src=" https://lifevitae.co/assets/img/strength/1.04 Simplifying the complex.png ">
                                        <p>Simplifying the Complex</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="hex-list">
                            <div class="hex">
                                <div class="hexIn">
                                    <a class="hexLink   hexa_bg_Cognitive " href="javascript:void(0);">
                                        <img src=" https://lifevitae.co/assets/img/strength/1.01 Problem Solving.png ">
                                        <p>Problem Solving</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="hex-list">
                            <img class="hex-lv" src="/assets/sahabat_siswa_report/logo_l_hex.png">
                        </li>
                        <li class="hex-list">
                            <div class="hex">
                                <div class="hexIn">
                                    <a class="hexLink   hexa_bg_Creative " href="javascript:void(0);">
                                        <img src=" https://lifevitae.co/assets/img/strength/4.01 Curiosity.png ">
                                        <p>Curiosity</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="hex-list">
                            <div class="hex">
                                <div class="hexIn">
                                    <a class="hexLink   hexa_bg_Creative " href="javascript:void(0);">
                                        <img src=" https://lifevitae.co/assets/img/strength/4.04 Entrepreneurship.png ">
                                        <p>Entrepreneurship</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="hex-list">
                            <div class="hex">
                                <div class="hexIn">
                                    <a class="hexLink   hexa_bg_Motive " href="javascript:void(0);">
                                        <img src=" https://lifevitae.co/assets/img/strength/6.04 Confidence.png ">
                                        <p>Confidence</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="hex-list">
                            <div class="hex">
                                <div class="hexIn">
                                    <a class="hexLink   hexa_bg_Emotive " href="javascript:void(0);">
                                        <img src=" https://lifevitae.co/assets/img/strength/3.04 Calmness.png ">
                                        <p>Calmness</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="hex-list">
                            <div class="hex">
                                <div class="hexIn">
                                    <a class="hexLink   hexa_bg_Adaptive " href="javascript:void(0);">
                                        <img src=" https://lifevitae.co/assets/img/strength/5.03 Dealing with Adversity.png ">
                                        <p>Dealing with Adversity</p>
                                    </a>
                                </div>
                            </div>
                        </li>      
                    </ul>
                </div>
            </div>

            <div id="profile_timeline">
                <div class="row">
                    <div class="col-lg-10">
                        <p class="heading-section">Neel's <b>Academic Performance</b>
                            <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="top">
                                <i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i>
                            </span>
                        </p>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <div class="user-chart">
                    <div id="userChart">
                        <div id="lifepower_tour" style="margin: 0 15px;">
                            <canvas id="canvasLine" style="display: block; width: 130px; height: 130px;">
                            </canvas>
                            <script src="https://cdnjs.cloudfare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
                            <script>
                                const dataLine = {
                                    labels: ["8th Standard", "9th Standard", "10th Standard"],
                                    datasets: [{
                                            data: [81, 85, 91],
                                            label: "Art & Culture",
                                            fill: false,
                                            borderColor: '#2d5597',
                                            backgroundColor: '#2d5597',
                                        },
                                        {
                                            data: [77, 61, 44],
                                            label: "Social Science",
                                            fill: false,
                                            borderColor: '#0B9D2B',
                                            backgroundColor: '#0B9D2B',
                                        },
                                        {
                                            data: [62, 67, 78],
                                            label: "Biology",
                                            fill: false,
                                            borderColor: '#ED7D31',
                                            backgroundColor: '#ED7D31',
                                        },
                                        {
                                            data: [58, 31, 69],
                                            label: "Economic",
                                            fill: false,
                                            borderColor: '#C00000',
                                            backgroundColor: '#C00000',
                                        },
                                        {
                                            data: [39, 59, 55],
                                            label: "Math",
                                            fill: false,
                                            borderColor: '#663AA9',
                                            backgroundColor: '#663AA9',
                                        },
                                    ]
                                };
                                const configLine = {
                                    type: 'line',
                                    data: dataLine,
                                    options: {
                                        indexAxis: 'x',
                                        scales: {
                                            y: {
                                                max: 100,
                                                min: 0,
                                                ticks: {
                                                    stepSize: 20
                                                },
                                                grid: {
                                                    display: false,
                                                }
                                            },
                                        },
                                        plugins: {
                                            legend: {
                                                display: true,
                                                position: 'right',
                                                align: 'start',
                                                labels: {
                                                    font: {
                                                        size: 15,
                                                    },
                                                    padding: 20,
                                                    textAlign: 'start',
                                                    usePointStyle: true,
                                                    pointStyle: 'line',
                                                }
                                            }
                                        }
                                    }
                                };

                                const myChartLine = new Chart(
                                    document.getElementById('canvasLine'),
                                    configLine
                                );
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <div id="profile_timeline">
                <div class="row">
                    <div class="col-lg-10">
                        <p class="heading-section">Top Learning Pathways</b>
                            <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="top">
                                <i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i>
                            </span>
                        </p>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <div class="pathway-safety d-flex align-items-center">
                    <div class="row align-items-center">
                        <div class="col-sm-2 col-md-3">
                            <div class="hexagon-strength safety">
                                <div class="text-center">
                                    <img src="/assets/omr/creative_design_icon.png" style="width: 50%;">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-9">
                            <p class="description-title">Creative Design</p>
                            <p class="description-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="pathway-safety d-flex align-items-center">
                    <div class="row align-items-center">
                        <div class="col-sm-2 col-md-3">
                            <div class="hexagon-strength safety">
                                <div class="text-center">
                                    <img src="/assets/omr/creative_design_icon.png" style="width: 50%;">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-9">
                            <p class="description-title">Creative Design</p>
                            <p class="description-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="pathway-safety d-flex align-items-center">
                    <div class="row align-items-center">
                        <div class="col-sm-2 col-md-3">
                            <div class="hexagon-strength safety">
                                <div class="text-center">
                                    <img src="/assets/omr/creative_design_icon.png" style="width: 50%;">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-9">
                            <p class="description-title">Creative Design</p>
                            <p class="description-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<script>
    $('.new-carousel').owlCarousel({
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        },
        margin: 30,
        nav: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    })
</script>
@endpush