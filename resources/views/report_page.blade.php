@extends('layouts.app')

@section('title', 'Report Page')

@section('content')
<div class="right-content">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="left-header">
                <h3>Report Page</h3>
                <span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." data-tooltip-location="right">
                    <i class="fa fa-question-circle tooltip-icon"></i>
                </span>

            </div>
        </div>
        <div class="col-lg-8">
            <div>
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <div class="top-box bg-white d-flex my-md-4">
                            <div class="top-icon-box">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <input type="text" class="top-search-input" placeholder="Search Class, Documents, Activities... ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-box">
        <div class="row">
            <div class="col-lg-4">
                <div class="report-page">
                    <div class="gray-box">
                        <div class="row m-2">
                            <div class="col-md-12">
                                <h5 class="font-weight-bold">Class XII</h5>
                                <p>Number of Students: 32</p>
                            </div>
                            <div class="col-md-12">
                                <div class="top-box bg-white d-flex my-md-4">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                    <input type="text" class="top-search-input" placeholder="Search Student">
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="download_btn m-2">
                                    Download Report
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="report-page">
                    <div class="gray-box">
                        <div class="row m-2">
                            <div class="col-md-12">
                                <h5 class="font-weight-bold">Class XII</h5>
                                <p>Number of Students: 32</p>
                            </div>
                            <div class="col-md-12">
                                <div class="top-box bg-white d-flex my-md-4">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                    <input type="text" class="top-search-input" placeholder="Search Student">
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="download_btn m-2">
                                    Download Report
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="report-page">
                    <div class="gray-box">
                        <div class="row m-2">
                            <div class="col-12">
                                <h5 class="font-weight-bold">Class XII</h5>
                                <p>Number of Students: 32</p>
                            </div>
                            <div class="col-12">
                                <div class="top-box bg-white d-flex my-md-4">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                    <input type="text" class="top-search-input" placeholder="Search Student">
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="download_btn m-2">
                                    Download Report
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-space"></div>
    </div>
</div>
@endsection

@push('script')

@endpush