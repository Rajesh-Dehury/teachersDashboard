@extends('layouts.app')

@section('title', 'Lifeskills Page')

@section('content')
<div class="right-content">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="left-header">
                <h3>Class 11<br>LifeSkills Page</h3>
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
        <div class="row align-items-stretch">
            <div class="col-lg-6 box" style="margin-top: 4rem;">
                <div class="skillchart-box">
                    <div class="col-md-12">
                        <p class="mt-2">Skill Distribution Chart</p>
                    </div>
                    <div class="col-md-12 px-0 px-md-3 d-flex justify-content-center">
                        <div class="myPieChart2">
                            <canvas id="myChart"></canvas> 
                            </script>
                            <script>
                                const data = {
                                    labels: ["Motive", "Creative", "Adaptive", "Emotive", "Interactive",
                                        "Cognitive"
                                    ],
                                    datasets: [{
                                        label: "",
                                        data: [25, 5, 27, 20, 18, 5],
                                        backgroundColor: ['#c00000', '#ed7d31', '#ffc000', '#70ad47',
                                            '#5b9bd5', '#2d5597'
                                        ],
                                    }]
                                };
                                const config = {
                                    type: 'pie',
                                    data,
                                    options: {
                                        plugins: {
                                            tooltip: {
                                                position: 'average',
                                                bodyAlign: 'center',
                                                backgroundColor: '#824FD2',
                                                bodyColor: '#fff',
                                                displayColors: false,
                                                callbacks: {
                                                    title: () => null, //to remove title
                                                    label: function(context) {
                                                        return context.formattedValue + '%';
                                                    }
                                                },
                                            },
                                            legend: {
                                                display: true,
                                                position: 'right',
                                                align: 'center',
                                                responsive: true,
                                                labels: {
                                                    font: {
                                                        size: 15,
                                                    },
                                                    textAlign: 'start',
                                                    usePointStyle: true,
                                                    pointStyle: 'rectRounded',
                                                }
                                            }
                                        }
                                    }
                                };

                                const myChart = new Chart(
                                    document.getElementById('myChart'),
                                    config
                                );
                            </script>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p style="font-weight: normal; font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column">
                    <div class="skillchart-box box">
                        <div class="col-md-12">
                            <p class="mt-2">Dominant Skills</p>
                        </div>
                        <div class="col-md-12 px-0 px-md-3 d-flex justify-content-center">
                            <div class="skill-charts">
                                <canvas id="myChartDomSkill"></canvas>
                                <script src="https://cdnjs.cloudfare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
                                <script>
                                    const dataDomSkill = {
                                        labels: ["Motive", "Creative", "Adaptive", "Emotive", "Interactive", "Cognitive"],
                                        datasets: [{
                                            label: "",
                                            data: [25, 5, 27, 20, 18, 5],
                                            backgroundColor: ['#c00000', '#ed7d31', '#ffc000', '#70ad47', '#5b9bd5', '#2d5597'],
                                        }]
                                    };

                                    const configDomSkill = {
                                        type: 'doughnut',
                                        data: dataDomSkill,
                                        options: {
                                            cutout: 40,
                                            responsive: true,
                                            plugins: {
                                                tooltip: {
                                                    position: 'average',
                                                    bodyAlign: 'center',
                                                    backgroundColor: '#824FD2',
                                                    bodyColor: '#fff',
                                                    displayColors: false,
                                                    callbacks: {
                                                        title: () => null, //to remove title
                                                        label: function(context) {
                                                            return context.formattedValue + '%';
                                                        }
                                                    },
                                                },
                                                legend: {
                                                    position: 'right',
                                                    align: 'center',
                                                    labels: {
                                                        usePointStyle: true,
                                                        pointStyle: 'rectRounded',
                                                    }
                                                },
                                            }
                                        },
                                    };
                                    const myChartDomSkill = new Chart(
                                        document.getElementById('myChartDomSkill'),
                                        configDomSkill
                                    );
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="skillchart-box box" style="margin-top: 1rem;">
                        <div class="col-md-12">
                            <p class="mt-2">Developing Skills</p>
                        </div>
                        <div class="col-md-12 px-0 px-md-3 d-flex justify-content-center">
                            <div class="skill-charts">
                                <canvas id="myChartDevSkill"></canvas>
                                <script src="https://cdnjs.cloudfare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
                                <script>
                                    const dataDevSkill = {
                                        labels: ["Motive", "Creative", "Adaptive", "Emotive", "Interactive", "Cognitive"],
                                        datasets: [{
                                            label: "",
                                            data: [25, 5, 27, 20, 18, 5],
                                            backgroundColor: ['#c00000', '#ed7d31', '#ffc000', '#70ad47', '#5b9bd5', '#2d5597'],
                                        }]
                                    };
                                    const configDevSkill = {
                                        type: 'doughnut',
                                        data: dataDevSkill,
                                        options: {
                                            cutout: 40,
                                            plugins: {
                                                tooltip: {
                                                    position: 'average',
                                                    bodyAlign: 'center',
                                                    backgroundColor: '#824FD2',
                                                    bodyColor: '#fff',
                                                    displayColors: false,
                                                    callbacks: {
                                                        title: () => null, //to remove title
                                                        label: function(context) {
                                                            return context.formattedValue + '%';
                                                        }
                                                    },
                                                },
                                                legend: {
                                                    position: 'right',
                                                    align: 'center',
                                                    labels: {
                                                        usePointStyle: true,
                                                        pointStyle: 'rectRounded',
                                                    }
                                                },
                                            }
                                        }
                                    };

                                    const myChartDevSkill = new Chart(
                                        document.getElementById('myChartDevSkill'),
                                        configDevSkill
                                    );
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <h3 class="font-weight-bold mt-4">Skills</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="skill-box">
                            <p class="header">Cognitive</p>
                            <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_cognitive_hexa.png');">
                                <img src="/assets/teacher_dashboard_new/d_skills/cognitive.png" style="width: 50%;">
                            </div>
                            <p class="no">Number of Students: 11</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="skill-box">
                            <p class="header">Adaptive</p>
                            <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_adaptive_hexa.png');">
                                <img src="/assets/teacher_dashboard_new/d_skills/adaptive.png" style="width: 50%;">
                            </div>
                            <p class="no">Number of Students: 09</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="skill-box">
                            <p class="header">Interactive</p>
                            <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_interactive_hexa.png');">
                                <img src="/assets/teacher_dashboard_new/d_skills/interactive.png" style="width: 50%;">
                            </div>
                            <p class="no">Number of Students: 11</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="skill-box">
                            <p class="header">Creative</p>
                            <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_creative_hexa.png');">
                                <img src="/assets/teacher_dashboard_new/d_skills/creative.png" style="width: 50%;">
                            </div>
                            <p class="no">Number of Students: 15</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="skill-box">
                            <p class="header">Motive</p>
                            <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_motive_hexa.png');">
                                <img src="/assets/teacher_dashboard_new/d_skills/motive.png" style="width: 50%;">
                            </div>
                            <p class="no">Number of Students: 13</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="skill-box">
                            <p class="header">Emotive</p>
                            <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_emotive_hexa.png');">
                                <img src="/assets/teacher_dashboard_new/d_skills/emotive.png" style="width: 50%;">
                            </div>
                            <p class="no">Number of Students: 07</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="str-unlocked">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="font-weight-bold mt-4">Strengths Unlocked</h3>
                            <div class="gray">
                                <img src="/assets/teacher_dashboard_new/strength.png">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="gray-box">
                                <p>Greatest</p>
                                <h4>25</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="gray-box">
                                <p>Average</p>
                                <h4>25</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="gray-box">
                                <p>Least</p>
                                <h4>25</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <h3 class="font-weight-bold mt-4">Top Strengths</h3>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2">
                        <div class="skill-box strengths">
                            <p class="header">Cognitive</p>
                            <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_cognitive_hexa.png');">
                                <img src="/assets/teacher_dashboard_new/d_skills/cognitive.png" style="width: 50%;">
                            </div>
                            <p class="no">Number of Students: 11</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="skill-box strengths">
                            <p class="header">Adaptive</p>
                            <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_adaptive_hexa.png');">
                                <img src="/assets/teacher_dashboard_new/d_skills/adaptive.png" style="width: 50%;">
                            </div>
                            <p class="no">Number of Students: 09</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="skill-box strengths">
                            <p class="header">Interactive</p>
                            <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_interactive_hexa.png');">
                                <img src="/assets/teacher_dashboard_new/d_skills/interactive.png" style="width: 50%;">
                            </div>
                            <p class="no">Number of Students: 11</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="skill-box strengths">
                            <p class="header">Creative</p>
                            <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_creative_hexa.png');">
                                <img src="/assets/teacher_dashboard_new/d_skills/creative.png" style="width: 50%;">
                            </div>
                            <p class="no">Number of Students: 15</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="skill-box strengths">
                            <p class="header">Motive</p>
                            <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_motive_hexa.png');">
                                <img src="/assets/teacher_dashboard_new/d_skills/motive.png" style="width: 50%;">
                            </div>
                            <p class="no">Number of Students: 13</p>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2">
                        <div class="skill-box strengths">
                            <p class="header">Emotive</p>
                            <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_emotive_hexa.png');">
                                <img src="/assets/teacher_dashboard_new/d_skills/emotive.png" style="width: 50%;">
                            </div>
                            <p class="no">Number of Students: 07</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="skill-box strengths">
                            <p class="header">Emotive</p>
                            <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_emotive_hexa.png');">
                                <img src="/assets/teacher_dashboard_new/d_skills/emotive.png" style="width: 50%;">
                            </div>
                            <p class="no">Number of Students: 07</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="skill-box strengths">
                            <p class="header">Emotive</p>
                            <div class="hex-strength" style="background-image: url('/assets/teacher_dashboard_new/d_skills/d_emotive_hexa.png');">
                                <img src="/assets/teacher_dashboard_new/d_skills/emotive.png" style="width: 50%;">
                            </div>
                            <p class="no">Number of Students: 07</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')

@endpush