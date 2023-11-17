@extends('layouts.app')

@section('title', 'Interest Page')

@section('content')
<div class="right-content">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="left-header">
                <h3>Class 11<br>Interests Page</h3>
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
        <div class="interests search">
            <div class="nav2 navbar-expand-lg" id="myNav2">
                <ul class="nav" role="tablist">
                    <div class="owl-carousel new-carousel pl-4 pr-4">
                        <div class="item">
                            <li class="nav-item active">
                                <div class="gray-box">
                                    <div class="white-box">
                                        <a class="nav-link active" href="#">Photography</a>
                                        <img src="/assets/teacher_dashboard_new/interest/photography.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item">
                                <div class="gray-box">
                                    <div class="white-box">
                                        <a class="nav-link" href="#">Gardening</a>
                                        <img src="/assets/teacher_dashboard_new/interest/gardening.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item">
                                <div class="gray-box">
                                    <div class="white-box">
                                        <a class="nav-link active" href="#">Adventure & Travel</a>
                                        <img src="/assets/teacher_dashboard_new/interest/adventure_travel.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item">
                                <div class="gray-box">
                                    <div class="white-box">
                                        <a class="nav-link active" href="#">Management</a>
                                        <img src="/assets/teacher_dashboard_new/interest/management.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item">
                                <div class="gray-box">
                                    <div class="white-box">
                                        <a class="nav-link active" href="#">Charity</a>
                                        <img src="/assets/teacher_dashboard_new/interest/charity.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item">
                                <div class="gray-box">
                                    <div class="white-box">
                                        <a class="nav-link active" href="#">Art & Craft</a>
                                        <img src="/assets/teacher_dashboard_new/interest/art.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item">
                                <div class="gray-box">
                                    <div class="white-box">
                                        <a class="nav-link active" href="#">Physical Sport</a>
                                        <img src="/assets/teacher_dashboard_new/interest/sports.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item">
                                <div class="gray-box">
                                    <div class="white-box">
                                        <a class="nav-link active" href="#">Care for Other</a>
                                        <img src="/assets/teacher_dashboard_new/interest/care_for_other.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item">
                                <div class="gray-box">
                                    <div class="white-box">
                                        <a class="nav-link active" href="#">Dance</a>
                                        <img src="/assets/teacher_dashboard_new/interest/dance.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item">
                                <div class="gray-box">
                                    <div class="white-box">
                                        <a class="nav-link active" href="#">Music</a>
                                        <img src="/assets/teacher_dashboard_new/interest/music.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item">
                                <div class="gray-box">
                                    <div class="white-box">
                                        <a class="nav-link active" href="#">Cooking</a>
                                        <img src="/assets/teacher_dashboard_new/interest/cooking.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item">
                                <div class="gray-box">
                                    <div class="white-box">
                                        <a class="nav-link active" href="#">Research</a>
                                        <img src="/assets/teacher_dashboard_new/interest/research.png">
                                    </div>
                                    <h4>05</h4>
                                </div>
                            </li>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="result">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="profile">
                            <div class="row">
                                <div class="col-md-5 col-lg-5">
                                    <img src="/assets/teachers/intersect.png" style="width: 150px; height: 160px;">
                                </div>
                                <div class="col-md-7 col-lg-7" style="margin-top: 35px;">
                                    <p><b>Gabriela Aritonang</b></p>
                                    <p class="btn">Teal</p>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="interest">
                                        <p>Art & Craft is <b>Gabriela Aritonang</b>'s interest with.(Dummy text)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <div class="box">
                            <div class="row">
                                <div class="col-md-8 col-lg-8">
                                    <div class="interest-box">
                                        <p class="interest-header"><b>Illustrator</b></p>
                                        <span class="interest-type">CREATIVE / ARTISTIC</span>
                                        <p class="interest-date">August, 1st 2022</p>
                                        <p class="interest-detail">This is my digital artwork, themed in bird park. I am using some vibrant colours to make it stunning and peacefull.</p>
                                        <div class="passion_strength" style="color: #ed7d31">
                                            <svg class="Polygon_62_ks" viewBox="0 0 15.75 14" style="width: 15px; height: 15px; margin-top: -5px;">
                                                <path fill="#ed7d31" id="Polygon_62_ks" d="M 10.64280319213867 0 C 11.3653507232666 0 12.03171825408936 0.3897235691547394 12.38595581054688 1.019477605819702 L 15.19845485687256 6.019476413726807 C 15.54092025756836 6.628304004669189 15.54092025756836 7.371695041656494 15.19845485687256 7.980522155761719 L 12.38595581054688 12.98052215576172 C 12.03171825408936 13.610276222229 11.3653507232666 13.99999904632568 10.64280319213867 13.99999904632568 L 5.107193946838379 13.99999904632568 C 4.384647846221924 13.99999904632568 3.718279838562012 13.610276222229 3.364043235778809 12.98052215576172 L 0.5515440106391907 7.980521678924561 C 0.2090787589550018 7.371694564819336 0.2090788334608078 6.628303527832031 0.5515442490577698 6.019475936889648 L 3.364044427871704 1.019477248191833 C 3.718281269073486 0.3897233903408051 4.38464879989624 0 5.107195854187012 0 Z">
                                                </path>
                                            </svg>
                                            <b>Critical Thinking</b>
                                            (Creative)
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 text-center">
                                    {{-- <img class="art_image" src="/assets/teachers/placeholder_img.png"/> --}}
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="row">
                                <div class="col-md-8 col-lg-8">
                                    <div class="interest-box">
                                        <p class="interest-header"><b>Illustrator</b></p>
                                        <span class="interest-type">CREATIVE / ARTISTIC</span>
                                        <p class="interest-date">August, 1st 2022</p>
                                        <p class="interest-detail">This is my digital artwork, themed in bird park. I am using some vibrant colours to make it stunning and peacefull.</p>
                                        <div class="passion_strength" style="color: #ed7d31">
                                            <svg class="Polygon_62_ks" viewBox="0 0 15.75 14" style="width: 15px; height: 15px; margin-top: -5px;">
                                                <path fill="#ed7d31" id="Polygon_62_ks" d="M 10.64280319213867 0 C 11.3653507232666 0 12.03171825408936 0.3897235691547394 12.38595581054688 1.019477605819702 L 15.19845485687256 6.019476413726807 C 15.54092025756836 6.628304004669189 15.54092025756836 7.371695041656494 15.19845485687256 7.980522155761719 L 12.38595581054688 12.98052215576172 C 12.03171825408936 13.610276222229 11.3653507232666 13.99999904632568 10.64280319213867 13.99999904632568 L 5.107193946838379 13.99999904632568 C 4.384647846221924 13.99999904632568 3.718279838562012 13.610276222229 3.364043235778809 12.98052215576172 L 0.5515440106391907 7.980521678924561 C 0.2090787589550018 7.371694564819336 0.2090788334608078 6.628303527832031 0.5515442490577698 6.019475936889648 L 3.364044427871704 1.019477248191833 C 3.718281269073486 0.3897233903408051 4.38464879989624 0 5.107195854187012 0 Z">
                                                </path>
                                            </svg>
                                            <b>Critical Thinking</b>
                                            (Creative)
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 text-center">
                                    {{-- <img class="art_image" src="/assets/teachers/placeholder_img.png"/> --}}
                                </div>
                            </div>
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
                items: 3
            },
            1000: {
                items: 8
            }
        },
        margin: 30,
        nav: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    })
</script>
@endpush