@extends('layouts.app')

@section('title', 'Lifepaths Page')

@section('content')
<div class="right-content">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="left-header">
                <h3>Class 11<br>LifePaths Page</h3>
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
        <div class="pathway-space">
            <div class="purple-box">
                <p>Given your skill set, there’s a <span class="font-weight-bold">high</span> possibility for you to be matched to the following learning pathways</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="mt-4">You have 3 more learning pathways with a high match to your skill-set. You can upgrade to the full version to unlock these pathways.</p>
                </div>
            </div>
            <div class="pathway-safety d-flex align-items-center">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="hexagon-strength safety">
                            <div class="text-center">
                                <img src="/assets/teacher_dashboard_new/creative_design_icon.png" style="width: 50%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-6">
                                <p class="description-title">Science & Technology</p>
                            </div>
                            <div class="col-6">
                                <p class="description-title blue-text">No. of students:12</p>
                            </div>
                        </div>
                        <p class="description-text">Science and technology, as a broad field, encompasses a wide range of disciplines, including biotechnology, life and physical science, animal and plant science, and information technology. Professionals in science and technology can be found in almost any industry, from government to manufacturing to pharmaceuticals. They use sophisticated testing equipment, are in charge of data tracking and logging, and collaborate with physicians and other researchers. A degree in Science and Technology helps a student undertake research based thinking techniques which are crucial in every industry.</p>
                    </div>
                </div>
            </div>
            <div class="pathway-safety d-flex align-items-center">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="hexagon-strength safety">
                            <div class="text-center">
                                <img src="/assets/teacher_dashboard_new/creative_design_icon.png" style="width: 50%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-6">
                                <p class="description-title">Analytics</p>
                            </div>
                            <div class="col-6">
                                <p class="description-title blue-text">No. of students:15</p>
                            </div>
                        </div>
                        <p class="description-text">Analytics helps us see insights and meaningful data that we might not otherwise detect. Business analytics focuses on using insights derived from data to make more informed decisions that will help organizations increase sales, reduce costs, and make other business improvements. Analytics professionals review data to identify key insights into a business's customers and ways the data can be used to solve problems. They also communicate this information to company leadership and other stakeholders.</p>
                    </div>
                </div>
            </div>
            <div class="pathway-safety d-flex align-items-center">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="hexagon-strength safety">
                            <div class="text-center">
                                <img src="/assets/teacher_dashboard_new/creative_design_icon.png" style="width: 50%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-6">
                                <p class="description-title">Agriculture & Food Technology</p>
                            </div>
                            <div class="col-6">
                                <p class="description-title blue-text">No. of students:09</p>
                            </div>
                        </div>
                        <p class="description-text">Currently, Agriculture and Food Technology accounts for the largest job sector around the globe. The industry works through the whole process of food cultivation, processing, packaging and distribution. This sector employs graduates from many fields such as engineering, agriculture courses, biosciences etc. in positions such as research scientist, lab technician, food inspector, food engineer, biochemist, food product development director etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')

@endpush
