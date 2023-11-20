@extends('layouts.app')

@section('title', 'Admission corner')

@section('content')
<div class="right-content">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="left-header">
                <h3>Admission corner</h3>
                <p>Student Name</p>
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


    <div class="main-box" style="overflow: hidden;">
        <div class="nav flex-gap tag-container" role="tablist" style="display: flex;flex-wrap: nowrap;">
            <button class="tag-item active" id="shortlisted_colleges" data-toggle="tab" data-target="#nav-shortlisted_colleges" type="button" role="tab" aria-controls="nav-shortlisted_colleges" aria-selected="true">
                <span>Shortlisted Colleges</span>
            </button>
            <button class="tag-item" id="transcripts" data-toggle="tab" data-target="#nav-transcripts" type="button" role="tab" aria-controls="nav-transcripts" aria-selected="false">
                <span>Transcripts</span>
            </button>
            <button class="tag-item" id="recommendation_letter" data-toggle="tab" data-target="#nav-recommendation_letter" type="button" role="tab" aria-controls="nav-recommendation_letter" aria-selected="false">
                <span>Recommendation Letter</span>
            </button>
            <button class="tag-item" id="entrance_examination" data-toggle="tab" data-target="#nav-entrance_examination" type="button" role="tab" aria-controls="nav-entrance_examination" aria-selected="false">
                <span>Entrance Examination</span>
            </button>
            <button class="tag-item" id="essay_corner" data-toggle="tab" data-target="#nav-essay_corner" type="button" role="tab" aria-controls="nav-essay_corner" aria-selected="false">
                <span>Essay Corner</span>
            </button>
        </div>

        <div class="tab-content" id="nav-tabContent">

            <div class="stat-card row">
                <div class="col-md-5 col-lg-4">
                    <div class="stat-card-item position-relative">
                        <span class="d-inline-block side-row"></span>
                        <div class="d-flex justify-content-between px-4 py-3">
                            <div class="d-flex flex-column justify-content-between">
                                <h5 class="font-weight-bold">Total Files</h5>
                                <h6 class="font-weight-bold count">12</h6>
                            </div>
                            <div class="stat-icon-box">
                                <svg width="40" height="46" viewBox="0 0 40 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M38.7381 9.51188L29.9881 0.761876C29.8255 0.599415 29.6324 0.470591 29.42 0.382762C29.2075 0.294933 28.9799 0.24982 28.75 0.250001H11.25C10.3217 0.250001 9.4315 0.618749 8.77513 1.27513C8.11875 1.9315 7.75 2.82174 7.75 3.75V7.25H4.25C3.32174 7.25 2.4315 7.61875 1.77513 8.27513C1.11875 8.9315 0.75 9.82174 0.75 10.75V42.25C0.75 43.1783 1.11875 44.0685 1.77513 44.7249C2.4315 45.3812 3.32174 45.75 4.25 45.75H28.75C29.6783 45.75 30.5685 45.3812 31.2249 44.7249C31.8813 44.0685 32.25 43.1783 32.25 42.25V38.75H35.75C36.6783 38.75 37.5685 38.3812 38.2249 37.7249C38.8812 37.0685 39.25 36.1783 39.25 35.25V10.75C39.2502 10.5201 39.2051 10.2925 39.1172 10.08C39.0294 9.86757 38.9006 9.67452 38.7381 9.51188ZM21.75 37H11.25C10.7859 37 10.3408 36.8156 10.0126 36.4874C9.68437 36.1592 9.5 35.7141 9.5 35.25C9.5 34.7859 9.68437 34.3408 10.0126 34.0126C10.3408 33.6844 10.7859 33.5 11.25 33.5H21.75C22.2141 33.5 22.6593 33.6844 22.9874 34.0126C23.3156 34.3408 23.5 34.7859 23.5 35.25C23.5 35.7141 23.3156 36.1592 22.9874 36.4874C22.6593 36.8156 22.2141 37 21.75 37ZM21.75 30H11.25C10.7859 30 10.3408 29.8156 10.0126 29.4874C9.68437 29.1593 9.5 28.7141 9.5 28.25C9.5 27.7859 9.68437 27.3407 10.0126 27.0126C10.3408 26.6844 10.7859 26.5 11.25 26.5H21.75C22.2141 26.5 22.6593 26.6844 22.9874 27.0126C23.3156 27.3407 23.5 27.7859 23.5 28.25C23.5 28.7141 23.3156 29.1593 22.9874 29.4874C22.6593 29.8156 22.2141 30 21.75 30ZM35.75 35.25H32.25V17.75C32.2502 17.5201 32.2051 17.2925 32.1172 17.08C32.0294 16.8676 31.9006 16.6745 31.7381 16.5119L22.9881 7.76188C22.8255 7.59942 22.6324 7.47059 22.42 7.38276C22.2075 7.29493 21.9799 7.24982 21.75 7.25H11.25V3.75H28.0259L35.75 11.4741V35.25Z" fill="#8950E1" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="stat-card-item position-relative">
                        <span class="d-inline-block side-row"></span>
                        <div class="d-flex justify-content-between px-4 py-3">
                            <div class="d-flex flex-column justify-content-between">
                                <h5 class="font-weight-bold">Pending</h5>
                                <h6 class="font-weight-bold count">03</h6>
                            </div>
                            <div class="stat-icon-box">
                                <svg width="42" height="35" viewBox="0 0 42 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.1187 5.98086C22.3552 5.98086 21.6403 5.60753 21.2035 4.98219L19.5291 2.57979C18.5696 1.20219 16.996 0.380859 15.3179 0.380859C12.9789 0.380859 9.00292 0.380859 6.06665 0.380859C3.23119 0.380859 0.933319 2.67873 0.933319 5.51419V29.7809C0.933319 31.1417 1.47465 32.4483 2.43599 33.4115C3.39919 34.3729 4.70585 34.9142 6.06665 34.9142C13.2197 34.9142 28.7803 34.9142 35.9333 34.9142C37.2941 34.9142 38.6008 34.3729 39.564 33.4115C40.5253 32.4483 41.0667 31.1417 41.0667 29.7809V11.1142C41.0667 9.75339 40.5253 8.44673 39.564 7.48353C38.6008 6.52219 37.2941 5.98086 35.9333 5.98086H23.1187ZM21 12.0363C16.6208 12.0363 13.0667 15.5905 13.0667 19.9697C13.0667 24.3489 16.6208 27.903 21 27.903C25.3792 27.903 28.9333 24.3489 28.9333 19.9697C28.9333 15.5905 25.3792 12.0363 21 12.0363ZM21 14.8363C23.8336 14.8363 26.1333 17.1361 26.1333 19.9697C26.1333 22.8033 23.8336 25.103 21 25.103C18.1664 25.103 15.8667 22.8033 15.8667 19.9697C15.8667 17.1361 18.1664 14.8363 21 14.8363ZM18.6667 18.103V20.903C18.6667 21.6758 19.2939 22.303 20.0667 22.303H22.8667C23.6395 22.303 24.2667 21.6758 24.2667 20.903C24.2667 20.1302 23.6395 19.503 22.8667 19.503H21.4667V18.103C21.4667 17.3302 20.8395 16.703 20.0667 16.703C19.2939 16.703 18.6667 17.3302 18.6667 18.103Z" fill="#8950E1" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade show active" id="nav-shortlisted_colleges" role="tabpanel" aria-labelledby="shortlisted_colleges">
                <div class="tableContainer">
                    <table class="mainTable mt-5">
                        <thead>
                            <tr class="head-row">
                                <th class="head-data left-round">S.NO</th>
                                <th class="head-data">Name of College</th>
                                <th class="head-data">Location</th>
                                <th class="head-data">Exam Date</th>
                                <th class="head-data">Exam Name</th>
                                <th class="head-data right-round">Application Deadline</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="body-row">
                                <td class="body-data left-round">
                                    <span>1</span>
                                </td>
                                <td class="body-data">
                                    <span>US College</span>
                                </td>
                                <td class="body-data" style="width: 300px;">
                                    <span>464 Elk Ln Bismarck, Arkansas(AR), 71929</span>
                                </td>
                                <td class="body-data">
                                    <span>8th of September</span>
                                </td>
                                <td class="body-data">
                                    <span>GMAT</span>
                                </td>
                                <td class="body-data right-round">
                                    <span></span>
                                </td>
                            </tr>
                            <tr class="body-row">
                                <td class="body-data left-round">
                                    <span>1</span>
                                </td>
                                <td class="body-data">
                                    <span>US College</span>
                                </td>
                                <td class="body-data" style="width: 300px;">
                                    <span>464 Elk Ln Bismarck, Arkansas(AR), 71929</span>
                                </td>
                                <td class="body-data">
                                    <span>8th of September</span>
                                </td>
                                <td class="body-data">
                                    <span>GMAT</span>
                                </td>
                                <td class="body-data right-round">
                                    <span></span>
                                </td>
                            </tr>
                            <tr class="body-row">
                                <td class="body-data left-round">
                                    <span>1</span>
                                </td>
                                <td class="body-data">
                                    <span>US College</span>
                                </td>
                                <td class="body-data" style="width: 300px;">
                                    <span>464 Elk Ln Bismarck, Arkansas(AR), 71929</span>
                                </td>
                                <td class="body-data">
                                    <span>8th of September</span>
                                </td>
                                <td class="body-data">
                                    <span>GMAT</span>
                                </td>
                                <td class="body-data right-round">
                                    <span></span>
                                </td>
                            </tr>
                            <tr class="body-row">
                                <td class="body-data left-round">
                                    <span>1</span>
                                </td>
                                <td class="body-data">
                                    <span>US College</span>
                                </td>
                                <td class="body-data" style="width: 300px;">
                                    <span>464 Elk Ln Bismarck, Arkansas(AR), 71929</span>
                                </td>
                                <td class="body-data">
                                    <span>8th of September</span>
                                </td>
                                <td class="body-data">
                                    <span>GMAT</span>
                                </td>
                                <td class="body-data right-round">
                                    <span></span>
                                </td>
                            </tr>
                            <tr class="body-row">
                                <td class="body-data left-round">
                                    <span>1</span>
                                </td>
                                <td class="body-data">
                                    <span>US College</span>
                                </td>
                                <td class="body-data" style="width: 300px;">
                                    <span>464 Elk Ln Bismarck, Arkansas(AR), 71929</span>
                                </td>
                                <td class="body-data">
                                    <span>8th of September</span>
                                </td>
                                <td class="body-data">
                                    <span>GMAT</span>
                                </td>
                                <td class="body-data right-round">
                                    <span></span>
                                </td>
                            </tr>
                            <tr class="body-row">
                                <td class="body-data left-round">
                                    <span>1</span>
                                </td>
                                <td class="body-data">
                                    <span>US College</span>
                                </td>
                                <td class="body-data" style="width: 300px;">
                                    <span>464 Elk Ln Bismarck, Arkansas(AR), 71929</span>
                                </td>
                                <td class="body-data">
                                    <span>8th of September</span>
                                </td>
                                <td class="body-data">
                                    <span>GMAT</span>
                                </td>
                                <td class="body-data right-round">
                                    <span></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-transcripts" role="tabpanel" aria-labelledby="transcripts">

                <div class="tableContainer">
                    <table class="mainTable mt-5">
                        <thead>
                            <tr class="head-row">
                                <th class="head-data left-round">S.NO</th>
                                <th class="head-data">File Name</th>
                                <th class="head-data">Date</th>
                                <th class="head-data">Status</th>
                                <th class="head-data">Remarks</th>
                                <th class="head-data right-round">Preview</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="body-row">
                                <td class="body-data left-round"><span>1</span></td>
                                <td class="body-data">
                                    <span>PDF 1</span>
                                    <img src="{{asset('assets/teacher_dashboard_new/jpg.png')}}" alt="" class="img-fluid ml-2">
                                </td>
                                <td class="body-data">
                                    <span>16 /08/23</span>
                                </td>
                                <td class="body-data">
                                    <select class="custom-select select-radious">
                                        <option value="Approved">Approved</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </td>
                                <td class="body-data">
                                    <button class="btn btn-style">
                                        <i class="fa-regular fa-message"></i>
                                    </button>
                                </td>
                                <td class="body-data right-round">
                                    <button class="btn btn-style">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                    <button class="btn btn-style">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="body-row">
                                <td class="body-data left-round"><span>1</span></td>
                                <td class="body-data">
                                    <span>PDF 1</span>
                                    <img src="{{asset('assets/teacher_dashboard_new/jpg.png')}}" alt="" class="img-fluid ml-2">
                                </td>
                                <td class="body-data">
                                    <span>16 /08/23</span>
                                </td>
                                <td class="body-data">
                                    <select class="custom-select select-radious">
                                        <option value="Approved">Approved</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </td>
                                <td class="body-data">
                                    <button class="btn btn-style">
                                        <i class="fa-solid fa-message icon-color"></i>
                                    </button>
                                </td>
                                <td class="body-data right-round">
                                    <button class="btn btn-style">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                    <button class="btn btn-style">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-recommendation_letter" role="tabpanel" aria-labelledby="recommendation_letter">

                <div class="tableContainer">
                    <table class="mainTable mt-5">
                        <thead>
                            <tr class="head-row">
                                <th class="head-data left-round">S.NO</th>
                                <th class="head-data">File Name</th>
                                <th class="head-data">Date</th>
                                <th class="head-data">Status</th>
                                <th class="head-data">Remarks</th>
                                <th class="head-data right-round">Preview</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="body-row">
                                <td class="body-data left-round"><span>1</span></td>
                                <td class="body-data">
                                    <span>PDF 1</span>
                                    <img src="{{asset('assets/teacher_dashboard_new/jpg.png')}}" alt="" class="img-fluid ml-2">
                                </td>
                                <td class="body-data">
                                    <span>16 /08/23</span>
                                </td>
                                <td class="body-data">
                                    <select class="custom-select select-radious">
                                        <option value="Approved">Approved</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </td>
                                <td class="body-data">
                                    <button class="btn btn-style">
                                        <i class="fa-regular fa-message"></i>
                                    </button>
                                </td>
                                <td class="body-data right-round">
                                    <button class="btn btn-style">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                    <button class="btn btn-style">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="body-row">
                                <td class="body-data left-round"><span>1</span></td>
                                <td class="body-data">
                                    <span>PDF 1</span>
                                    <img src="{{asset('assets/teacher_dashboard_new/jpg.png')}}" alt="" class="img-fluid ml-2">
                                </td>
                                <td class="body-data">
                                    <span>16 /08/23</span>
                                </td>
                                <td class="body-data">
                                    <select class="custom-select select-radious">
                                        <option value="Approved">Approved</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </td>
                                <td class="body-data">
                                    <button class="btn btn-style">
                                        <i class="fa-solid fa-message icon-color"></i>
                                    </button>
                                </td>
                                <td class="body-data right-round">
                                    <button class="btn btn-style">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                    <button class="btn btn-style">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-entrance_examination" role="tabpanel" aria-labelledby="entrance_examination">

                <div class="tableContainer">
                    <table class="mainTable mt-5">
                        <thead>
                            <tr class="head-row">
                                <th class="head-data left-round">S.NO</th>
                                <th class="head-data">Name of Exam</th>
                                <th class="head-data">Exam Year</th>
                                <th class="head-data">Subject</th>
                                <th class="head-data">Grade</th>
                                <th class="head-data">Score</th>
                                <th class="head-data">Status</th>
                                <th class="head-data right-round">Preview</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="body-row">
                                <td class="body-data left-round">1</td>
                                <td class="body-data">
                                    <span>GMAT</span>
                                </td>
                                <td class="body-data">
                                    <span>2022</span>
                                </td>
                                <td class="body-data">
                                    <span>English</span>
                                </td>
                                <td class="body-data">
                                    <span></span>
                                </td>
                                <td class="body-data">
                                    <span></span>
                                </td>
                                <td class="body-data">
                                    <select class="custom-select select-radious">
                                        <option value="Approved">Approved</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </td>
                                <td class="body-data right-round">
                                    <button class="btn btn-style">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                    <button class="btn btn-style">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-essay_corner" role="tabpanel" aria-labelledby="essay_corner">
                <div class="sop-box">
                    <p class="sop-box-heading">SOP BOX</p>
                    <div class="pt-5">
                        <p class="px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, illum repudiandae accusamus aspernatur ullam vero, autem libero corporis error, praesentium ducimus obcaecati beatae? Quo quaerat repellendus tenetur ullam distinctio maxime pariatur odit vero deserunt architecto incidunt maiores cumque, nobis delectus ad sequi facilis quisquam quasi in provident rem est adipisci. Vero a eos labore sit, totam voluptas rem odit ut temporibus doloribus neque illum tenetur. Nesciunt id placeat accusamus unde a, praesentium repudiandae officiis optio voluptatem non perferendis enim inventore, impedit libero ut reprehenderit, cum consequatur quidem. Quasi cumque totam, cum ipsum ducimus vero amet beatae, inventore, consequatur ea eveniet.</p>
                    </div>
                </div>


                <div class="tableContainer">
                    <table class="mainTable mt-5">
                        <thead>
                            <tr class="head-row">
                                <th class="head-data left-round">S.NO</th>
                                <th class="head-data">File Name</th>
                                <th class="head-data">Date</th>
                                <th class="head-data">Status</th>
                                <th class="head-data">Remarks</th>
                                <th class="head-data right-round">Preview</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="body-row">
                                <td class="body-data left-round">1</td>
                                <td class="body-data">
                                    <span>PDF 1</span>
                                    <img src="{{asset('assets/teacher_dashboard_new/jpg.png')}}" alt="" class="img-fluid ml-2">
                                </td>
                                <td class="body-data">
                                    <span>16 /08/23</span>
                                </td>
                                <td class="body-data">
                                    <select class="custom-select select-radious">
                                        <option value="Approved">Approved</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </td>
                                <td class="body-data">
                                    <button class="btn btn-style">
                                        <i class="fa-regular fa-message"></i>
                                    </button>
                                </td>
                                <td class="body-data right-round">
                                    <button class="btn btn-style">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                    <button class="btn btn-style">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-5">
                    <p class="heading-text">My Essays</p>
                    <div class="row owl-essay owl-carousel">
                        <div class="col-sm-12">
                            <div class="essay-card">
                                <h6 class="essay-date">27 July 2023</h6>
                                <p class="essay-question">Question: Lorem ipsum dolor sit amet, consectetur</p>
                                <p class="essay-content">
                                    Some students have a background, identity, interest, or talent that is so meaningful they believe their application would be incomplete without it. If this sounds like you, then please share your story. <span class="essay-read-more">Read more</span>
                                </p>
                                <div class="essay-comment-section">
                                    <h6 class="essay-comment-title font-weight-bold">Comment</h6>
                                    <textarea name="" class="form-control mb-2 text-area" placeholder="What are your thoughts on this essay?"></textarea>
                                    <div class="d-flex flex-row justify-content-end">
                                        <button class="btn btn-gray">Post a comment</button>
                                    </div>
                                </div>
                                <hr class="mb-1">
                                <div class="essay-bottom-box">
                                    <p class="essay-t-name mb-0">Teacher’s Name. Date</p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur(comment)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <p class="heading-text">Uploaded Files</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="upload-file-card">
                                <p class="upload-file-date">27 July 2023</p>
                                <p class="essay-question">Question: Lorem ipsum dolor sit amet, consectetur</p>
                                <div>
                                    <svg width="66" height="68" viewBox="0 0 66 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 8.5C0 3.81172 3.81172 0 8.5 0H29.75V17C29.75 19.3508 31.6492 21.25 34 21.25H51V40.375H23.375C18.6867 40.375 14.875 44.1867 14.875 48.875V68H8.5C3.81172 68 0 64.1883 0 59.5V8.5ZM51 17H34V0L51 17ZM23.375 46.75H27.625C31.7289 46.75 35.0625 50.0836 35.0625 54.1875C35.0625 58.2914 31.7289 61.625 27.625 61.625H25.5V65.875C25.5 67.0437 24.5438 68 23.375 68C22.2062 68 21.25 67.0437 21.25 65.875V48.875C21.25 47.7062 22.2062 46.75 23.375 46.75ZM27.625 57.375C29.3914 57.375 30.8125 55.9539 30.8125 54.1875C30.8125 52.4211 29.3914 51 27.625 51H25.5V57.375H27.625ZM40.375 46.75H44.625C48.1445 46.75 51 49.6055 51 53.125V61.625C51 65.1445 48.1445 68 44.625 68H40.375C39.2062 68 38.25 67.0437 38.25 65.875V48.875C38.25 47.7062 39.2062 46.75 40.375 46.75ZM44.625 63.75C45.7938 63.75 46.75 62.7938 46.75 61.625V53.125C46.75 51.9562 45.7938 51 44.625 51H42.5V63.75H44.625ZM55.25 48.875C55.25 47.7062 56.2062 46.75 57.375 46.75H63.75C64.9187 46.75 65.875 47.7062 65.875 48.875C65.875 50.0438 64.9187 51 63.75 51H59.5V55.25H63.75C64.9187 55.25 65.875 56.2062 65.875 57.375C65.875 58.5438 64.9187 59.5 63.75 59.5H59.5V65.875C59.5 67.0437 58.5438 68 57.375 68C56.2062 68 55.25 67.0437 55.25 65.875V48.875Z" fill="#40C2C1" />
                                    </svg>
                                </div>
                                <div class="essay-comment-section mt-3">
                                    <h6 class="essay-comment-title font-weight-bold">Comment</h6>
                                    <textarea name="" class="form-control mb-2 text-area" placeholder="What are your thoughts on this essay?"></textarea>
                                    <div class="d-flex flex-row justify-content-end">
                                        <button class="btn btn-gray">Post a comment</button>
                                    </div>
                                </div>
                                <hr class="mb-1">
                                <div class="main-comment">
                                    <div class="d-flex flex-row align-items-center mt-3">
                                        <img src="https://placehold.co/600x400" alt="" class="comment-img">
                                        <div class="user-name ml-2">
                                            Teacher’s Name
                                        </div>
                                        <div class="comment-time ml-2">
                                            14 min
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="comment-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, quasi placeat, adipisci impedit nihil iusto blanditiis nemo ipsa quibusdam quod deserunt.</p>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mt-3 justify-content-between interaction">
                                        <div>
                                            <span><span class="like-count">1</span> Like</span>
                                            <div class="d-inline-flex align-items-center ml-2">
                                                <i class="fa-solid fa-share comment-icon-size"></i>
                                                <span class="ml-2">Reply</span>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="fa-regular fa-thumbs-up comment-icon-size"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-comment-reply">
                                    <div class="d-flex flex-row align-items-center mt-3">
                                        <img src="https://placehold.co/600x400" alt="" class="comment-img">
                                        <div class="user-name ml-2">
                                            Teacher’s Name
                                        </div>
                                        <div class="comment-time ml-2">
                                            14 min
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="comment-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, quasi placeat, adipisci impedit nihil iusto blanditiis nemo ipsa quibusdam quod deserunt.</p>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mt-3 justify-content-between interaction">
                                        <div>
                                            <div class="d-inline-flex align-items-center ml-2">
                                                <i class="fa-solid fa-share comment-icon-size"></i>
                                                <span class="ml-2">Reply</span>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="fa-regular fa-thumbs-up comment-icon-size"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-comment-reply">
                                    <div class="d-flex flex-row align-items-center mt-3">
                                        <img src="https://placehold.co/600x400" alt="" class="comment-img">
                                        <div class="user-name ml-2">
                                            Teacher’s Name
                                        </div>
                                        <div class="comment-time ml-2">
                                            14 min
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="comment-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, quasi placeat, adipisci impedit nihil iusto blanditiis nemo ipsa quibusdam quod deserunt.</p>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mt-3 justify-content-between interaction">
                                        <div>
                                            <div class="d-inline-flex align-items-center ml-2">
                                                <i class="fa-solid fa-share comment-icon-size"></i>
                                                <span class="ml-2">Reply</span>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="fa-regular fa-thumbs-up comment-icon-size"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="reply-editor mt-3">
                                    <textarea id="reply-edit"></textarea>
                                    <div class="d-flex flex-row justify-content-end mt-2">
                                        <button class="btn btn-gray">Send</button>
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
@endsection

@push('script')
<script>
    $('.owl-essay').owlCarousel({
        loop: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })

    // ck editor
    ClassicEditor
        .create(document.querySelector('#reply-edit'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush