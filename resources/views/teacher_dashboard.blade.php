<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <title>Teacher Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- owl -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ck editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <link rel="stylesheet" href="/css/new_td.css">
    <link rel="stylesheet" href="/css/td_student.css">

</head>

<body>
    <div class="td-box">
        <div class="left-content">
            <a href="#" class="navbar-brand">
                <img src="/assets/teacher_dashboard_new/lv.png" alt="LifeVitae" style="height: 105px;">
            </a>
            <nav class="main-menu">
                <div class="scrollbar" id="style-1">
                    <ul id="left-main-menu">
                        <li>
                            <a href="http://127.0.0.1:8000/newTdCohortDashboard">
                                <div class="nav_card">
                                    <img src="/assets/teacher_dashboard_new/left_menu/home.png" alt="Home" title="Home">
                                    <p class="nav-text">Home</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:8000/newTdClassPage">
                                <div class="nav_card">
                                    <img src="/assets/teacher_dashboard_new/left_menu/class.png" alt="Class" title="Class">
                                    <p class="nav-text">Class</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:8000/newTdStudentPage">
                                <div class="nav_card">
                                    <img src="/assets/teacher_dashboard_new/left_menu/students.png" alt="Students" title="Students">
                                    <p class="nav-text">Students</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:8000/newTdLifeskillsPage">
                                <div class="nav_card">
                                    <img src="/assets/teacher_dashboard_new/left_menu/skills.png" alt="Skills" title="Skills">
                                    <p class="nav-text">Skills</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:8000/newTdLifepathsPage">
                                <div class="nav_card">
                                    <img src="/assets/teacher_dashboard_new/left_menu/lifepaths.png" alt="Lifepaths" title="Lifepaths">
                                    <p class="nav-text">Lifepaths</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:8000/newTdInterestPage">
                                <div class="nav_card">
                                    <img src="/assets/teacher_dashboard_new/left_menu/interests.png" alt="Interests" title="Interests">
                                    <p class="nav-text">Interests</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:8000/newTdAdmissionCorner">
                                <div class="nav_card">
                                    <img src="/assets/teacher_dashboard_new/left_menu/admission_corner.png" alt="Admission Corner" title="Admission Corner">
                                    <p class="nav-text">Admission Corner</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:8000/newTdReportPage">
                                <div class="nav_card">
                                    <img src="/assets/teacher_dashboard_new/left_menu/report.png" alt="Report" title="Report">
                                    <p class="nav-text">Report</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="right-content">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="left-header">
                        <h3>Cohort Dashboard</h3>
                        <p>Loreum Ipsum</p>
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
                <div class="col-lg-12">
                    <div class="purple-box">
                        <h3>Hi (name of the teacher),</h3>
                        <p>Welcome back to your Teacher's Dashboard – where student insights drive success!</p>
                        <img src="/assets/teacher_dashboard_new/teacher_and_student.png">
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="completed-profiles box">
                        <div class="row align-items-center">
                            <div class="col-2 col-md-2">
                                <div class="gray d-inline-flex align-items-center justify-content-center">
                                    <img src="/assets/teacher_dashboard_new/fa-solid_user-graduate.png">
                                </div>
                            </div>
                            <div class="col-10 col-md-10">
                                <p class="mb-0 pl-2 pl-md-0"> <span class="completed-profiles-text">Profiles Completed</span>
                                    <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="top">
                                        <i class="fa fa-question-circle tooltip-icon"></i>
                                    </span>
                                    : 40
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4 mt-3 mt-md-0">
                                <p>Gender Breakdown: </p>
                            </div>
                            <div class="col-md-2">
                                <p>20 <br class="d-none d-md-inline-block"><span style="font-weight: 100;">Male</span></p>
                            </div>
                            <div class="col-md-2">
                                <p>20 <br class="d-none d-md-inline-block"><span style="font-weight: 100;">Female</span></p>
                            </div>
                        </div>

                    </div>

                    <div class="top-character box">
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
                                            <div class="col-md-4">
                                                <div class="character-box">
                                                    <img src="/assets/teacher_dashboard_new/character.png">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="character-text">
                                                    <h4>Dreamer <span style="float: right;">32</span></h4>
                                                    <p>Students in this class are both emotive and creative. They have a
                                                        strong understanding of their feelings and are able to recognise
                                                        and effectively manage their emotions. They are also able to
                                                        generate ideas and solutions for unique problems through new,
                                                        out of the box perspectives.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item gray-box">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="character-box">
                                                    <img src="/assets/teacher_dashboard_new/character.png">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="character-text">
                                                    <h4>Dreamer <span style="float: right;">32</span></h4>
                                                    <p>Students in this class are both emotive and creative. They have a
                                                        strong understanding of their feelings and are able to recognise
                                                        and effectively manage their emotions. They are also able to
                                                        generate ideas and solutions for unique problems through new,
                                                        out of the box perspectives.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="interest-categories box">
                        <div class="row align-items-center">
                            <div class="col-10 col-md-10 pl-1 pl-md-3 pr-0">
                                <p class="mb-0"> <span>Interest Categories</span>
                                    <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="top">
                                        <i class="fa fa-question-circle tooltip-icon"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="col-2 col-md-2 pl-0 d-flex justify-content-end pr-1 pr-md-3">
                                <div class="gray">
                                    <i class="fa-solid fa-chevron-right white-iconbox"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <div class="gray-box">
                                    <div class="white-box my-2">
                                        <img src="/assets/teacher_dashboard_new/interest/photography.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="gray-box">
                                    <div class="white-box my-2">
                                        <img src="/assets/teacher_dashboard_new/interest/gardening.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="gray-box">
                                    <div class="white-box my-2">
                                        <img src="/assets/teacher_dashboard_new/interest/adventure_travel.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="gray-box">
                                    <div class="white-box my-2">
                                        <img src="/assets/teacher_dashboard_new/interest/management.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="gray-box">
                                    <div class="white-box my-2">
                                        <img src="/assets/teacher_dashboard_new/interest/dance.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="gray-box">
                                    <div class="white-box my-2">
                                        <img src="/assets/teacher_dashboard_new/interest/music.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="gray-box">
                                    <div class="white-box my-2">
                                        <img src="/assets/teacher_dashboard_new/interest/cooking.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="gray-box">
                                    <div class="white-box my-2">
                                        <img src="/assets/teacher_dashboard_new/interest/research.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="gray-box">
                                    <div class="white-box my-2">
                                        <img src="/assets/teacher_dashboard_new/interest/charity.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="gray-box">
                                    <div class="white-box my-2">
                                        <img src="/assets/teacher_dashboard_new/interest/art.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="gray-box">
                                    <div class="white-box my-2">
                                        <img src="/assets/teacher_dashboard_new/interest/sports.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="gray-box">
                                    <div class="white-box my-2">
                                        <img src="/assets/teacher_dashboard_new/interest/care_for_other.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="insights-box box">
                        <div class="row align-items-center mb-3">
                            <div class="col-2 col-md-1">
                                <div class="gray">
                                    <img src="/assets/teacher_dashboard_new/ic_outline-insights.png">
                                </div>
                            </div>
                            <div class="col-10 col-md-10">
                                <p class="mb-0 ml-3 ml-md-0">Insights</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mt-2">Skill Distribution Chart</p>
                            </div>
                            <div class="col-md-12 px-0 px-md-3 d-flex justify-content-center">
                                <div class="myPieChart">
                                    <canvas id="myChart"></canvas>
                                    <script src="https://cdnjs.cloudfare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js">
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
                                                            padding: 20,
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
                            <div class="row align-items-center justify-content-arround px-2 w-100">
                                <div class="col-md-10 col-10">
                                    <p class="mt-2 font-weight-normal" style="font-size: 16px;">
                                        Skill distribution of students in the cohort</p>
                                </div>
                                <div class="col-md-2 col-2 d-flex justify-content-end pr-0">
                                    <div class="gray">
                                        <i class="fa-solid fa-chevron-right white-iconbox"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p class="mt-4">Resource Usage Breakdown
                                    <span class="date">
                                        <img src="/assets/teacher_dashboard_new/date-picker-icon.png" role="button" data-toggle="dropdown">
                                        <input class="dropdown-menu" type="text" name="daterange" value="10/01/2023 - 10/15/2023" />
                                    </span>
                                </p>
                            </div>
                            <div class="col-md-12 px-0 px-md-3 d-flex justify-content-center">
                                <div class="myBarChart">
                                    <canvas id="barChart"></canvas>
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                    <script>
                                        const dates = ['Feb 10', 'Feb 11', 'Feb 12', 'Feb 13', 'Feb 14', 'Feb 15',
                                            'Feb 16'
                                        ];
                                        const datapoints = [1, 2, 3, 4, 5, 6, 7];
                                        const datab = {
                                            labels: dates,
                                            datasets: [{
                                                    data: [16, 27, 11, 20, 13, 25, 12],
                                                    label: "Motive",
                                                    backgroundColor: [
                                                        '#c00000',
                                                    ],
                                                    borderRadius: 10,
                                                    borderSkipped: 'bottom',
                                                },
                                                {
                                                    data: [18, 29, 25, 27, 8, 35, 32],
                                                    label: "Creative",
                                                    backgroundColor: [
                                                        '#ed7d31',
                                                    ],
                                                    borderRadius: 10,
                                                    borderSkipped: 'bottom',
                                                },
                                                {
                                                    data: [6, 26, 17, 20, 26, 35, 23],
                                                    label: "Adaptive",
                                                    backgroundColor: [
                                                        '#ffc000'
                                                    ],
                                                    borderRadius: 10,
                                                    borderSkipped: 'bottom',
                                                },
                                                {
                                                    data: [65, 5, 80, 18, 3, 61, 55],
                                                    label: "Emotive",
                                                    backgroundColor: [
                                                        '#70ad47'
                                                    ],
                                                    borderRadius: 10,
                                                    borderSkipped: 'bottom',
                                                },
                                                {
                                                    data: [18, 32, 27, 20, 30, 22, 11],
                                                    label: "Interactive",
                                                    backgroundColor: [
                                                        '#5b9bd5'
                                                    ],
                                                    borderRadius: 10,
                                                    borderSkipped: 'bottom',
                                                },
                                                {
                                                    data: [6, 28, 32, 20, 11, 35, 27],
                                                    label: "Cognitive",
                                                    backgroundColor: [
                                                        '#2d5597',
                                                    ],
                                                    borderRadius: 10,
                                                    borderSkipped: 'bottom',
                                                },
                                            ]
                                        };
                                        const configb = {
                                            type: 'bar',
                                            data: datab,
                                            options: {
                                                plugins: {
                                                    legend: {
                                                        display: false,
                                                    },
                                                    tooltip: {
                                                        mode: 'index',
                                                        position: 'average',
                                                        backgroundColor: '#ffffff',
                                                        titleColor: '#000000',
                                                        bodyColor: '#000000',
                                                    }
                                                },

                                                scales: {
                                                    x: {
                                                        stacked: true,
                                                        title: {
                                                            display: true,
                                                            // text: 'Week 1 2023',
                                                        },
                                                        ticks: {
                                                            display: true,
                                                        },
                                                        grid: {
                                                            display: false,
                                                        }
                                                    },
                                                    y: {
                                                        stacked: true,
                                                        title: {
                                                            display: true,
                                                            text: 'Number of views',
                                                        },
                                                        ticks: {
                                                            display: true,
                                                        },
                                                        grid: {
                                                            display: false
                                                        }
                                                    }
                                                }
                                            }
                                        };

                                        const barChart = new Chart(
                                            document.getElementById('barChart'),
                                            configb
                                        );

                                        function filterData(params) {
                                            const dates2 = [...dates];
                                            // console.log(dates2);
                                            const startdate = document.getElementById('startdate');
                                            const enddate = document.getElementById('enddate');
                                            //get the index number in array
                                            const indexstartdate = dates2.indexOf(startdate.value);
                                            console.log(indexstartdate);
                                            const indexenddate = dates2.indexOf(enddate.value);

                                            //slice the array (pie) only showing the selected section / slice
                                            const filterDate = dates2.slice(indexstartdate, indexenddate + 1);

                                            //replace the lables in the chart
                                            barChart.config.data.labels = filterDate;
                                            //datapoints
                                            const datapoints2 = [...datapoints];
                                            const filterDatapoints = datapoints2.slice(indexstartdate, indexenddate + 1);
                                            barChart.config.data.datasets[0].data = filterDatapoints;

                                            barChart.update();
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <p class="mt-2 font-weight-normal" style="font-size: 16px;">Number of the students who
                                    access to the resources over time</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="download-box box">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <p class="mb-0">Class Report</p>
                            </div>
                            <div class="col-4 d-flex justify-content-end">
                                <div class="gray">
                                    <i class="fa-solid fa-chevron-right white-iconbox"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <div class="download_btn">
                                    Download PDF
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pathway-box box">
                        <div class="row">
                            <div class="col-md-10">
                                <p>Top 3 Pathway
                                    <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="left">
                                        <i class="fa fa-question-circle tooltip-icon"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-3 col-3">
                                <img src="/assets/teacher_dashboard_new/path.png">
                            </div>
                            <div class="col-md-9 col-9">
                                <p style="font-size: 10px; font-weight: 700;">Business Administration
                                <p>
                                <p style="font-size: 10px;">Lorem Ipsum Descriptions Business Administration_</p>
                            </div>
                            <div class="col-md-3 col-3">
                                <img src="/assets/teacher_dashboard_new/path.png">
                            </div>
                            <div class="col-md-9 col-9">
                                <p style="font-size: 10px; font-weight: 700;">Business Administration
                                <p>
                                <p style="font-size: 10px;">Lorem Ipsum Descriptions Business Administration_</p>
                            </div>
                            <div class="col-md-3 col-3">
                                <img src="/assets/teacher_dashboard_new/path.png">
                            </div>
                            <div class="col-md-9 col-9">
                                <p style="font-size: 10px; font-weight: 700;">Business Administration
                                <p>
                                <p style="font-size: 10px;">Lorem Ipsum Descriptions Business Administration_</p>
                            </div>
                        </div>
                    </div>


                    <div class="pathway-box box">
                        <div class="row align-items-center">
                            <div class="col-md-3 col-3">
                                <div class="gray">
                                    <img src="/assets/teacher_dashboard_new/strength.png">
                                </div>
                            </div>
                            <div class="col-md-9 col-9">
                                <p class="mb-0">Top Strengths
                                    <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="left">
                                        <i class="fa fa-question-circle tooltip-icon"></i>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="gray-box">
                                    <span class="p-2 d-inline-block">Passion</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="gray-box">
                                    <span class="p-2 d-inline-block">Curiosity</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="gray-box">
                                    <span class="p-2 d-inline-block">Agility</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="gray-box">
                                    <span class="p-2 d-inline-block">Persistence</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="gray-box">
                                    <span class="p-2 d-inline-block">Exploring</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="gray-box">
                                    <span class="p-2 d-inline-block">Originality</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10">
                    <div class="marks-dis box">
                        <div class="col-md-12">
                            <p>Mark Distribution Box Plot
                                <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="top">
                                    <i class="fa fa-question-circle tooltip-icon"></i>
                                </span>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <!-- <canvas id="candleStickChart" width="400" height="400"></canvas> -->
                            <script>
                                const startingdate = luxon.DateTime.fromRFC2822('01 Oct 2023 00:00 GMT');
                                const startingdate2 = luxon.DateTime.fromRFC2822('02 Oct 2023 00:00 GMT');
                                const dataCandle = {
                                    // labels: ["Motive","Creative","Adaptive","Emotive","Interactive","Cognitive"],
                                    datasets: [{
                                        label: "",
                                        data: [{
                                                x: startingdate.valueOf(),
                                                o: 1,
                                                h: 1.50,
                                                l: 0.75,
                                                c: 1.25
                                            },
                                            {
                                                x: startingdate2.valueOf(),
                                                o: 1.2,
                                                h: 1.50,
                                                l: 0.75,
                                                c: 1.25
                                            },
                                        ],
                                        // backgroundColor: ['#c00000', '#ed7d31','#ffc000','#70ad47','#5b9bd5','#2d5597'],
                                    }]
                                };
                                const configCandle = {
                                    type: 'candlestick',
                                    data,
                                    options: {}
                                };

                                const candleStickChart = new Chart(
                                    document.getElementById('candleStickChart'),
                                    configCandle
                                );
                            </script>

                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="pathway-box box">
                        <div class="row align-items-center">
                            <div class="col-md-3 col-3">
                                <div class="gray">
                                    <img src="/assets/teacher_dashboard_new/strength.png">
                                </div>
                            </div>
                            <div class="col-md-9 col-9">
                                <p class="mb-0">Strengths Unlocked
                                    <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="left">
                                        <i class="fa fa-question-circle tooltip-icon"></i>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <p style="font-weight: normal;">Greatest </p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p style="font-weight: 700; float: right;">25</p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p style="font-weight: normal;">Average </p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p style="font-weight: 700; float: right;">18</p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p style="font-weight: normal;">Least </p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p style="font-weight: 700; float: right;">07</p>
                            </div>
                        </div>
                    </div>

                    <div class="pathway-box box">
                        <div class="row">
                            <div class="col-md-10">
                                <p>Pending Files
                                    <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="left">
                                        <i class="fa fa-question-circle tooltip-icon"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <div class="gray-box">
                                    <div class="row align-items-center">
                                        <div class="col-md-3 col-3">
                                            <div class="pending-files">
                                                <p>Class 12</p>
                                                <p>Pending files: 3</p>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-9">
                                            <div class="progress-circle over50 p100">
                                                <span>100%</span>
                                                <div class="left-half-clipper">
                                                    <div class="first50-bar"></div>
                                                    <div class="value-bar"></div>tssssss
                                                </div>rrrr
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

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
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ],
        })
    </script>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
    </script>

    <script>
        var modal = document.getElementById("passionModal");
        var btn = document.getElementById("passionBtn");
        var span1 = document.getElementsByClassName("passionClose")[0];
        btn.onclick = function() {
            modal.style.display = "block";
            $("#modal1").show();
            $("#modal2").hide();

            span1.onclick = function() {
                modal.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }

                var btn4 = document.getElementById("mapModal");
                var span2 = document.getElementsByClassName("closeMap")[0];
                span2.onclick = function() {
                    modal.style.display = "none";
                }
                $(document).ready(function() {
                    $("#mapModal").click(function() {
                        $("#modal1").hide();
                        $("#modal2").show();
                    });
                });
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $('[data-bs-toggle="tooltip"]').tooltip();
        });
    </script>

</body>

</html>