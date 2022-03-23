@extends('backend.layouts.app')
@section('styles')
    <style>
        .welcome-list ul{
            margin: 0;
            padding: 0;
        }
        .welcome-list ul li {
            list-style: none;
            margin-bottom: 10px;
        }
        .manage-links{
            background-color: #fff;
            padding: 25px 0;
        }
    </style>
@endsection

@section('content')

<?php
//    $news = \App\Models\News::count();
//    $groups = \App\Models\Group::count();
//    $categories = \App\Models\Category::count();
//    $requestedContact = \App\Models\ContactUs::count();
//    $tags = \App\Models\Tag::count();
//?>

    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Dashboard</span>
            <h3 class="page-title">Website Overview</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <section class="welcome-section">
    <div class="row">
        <div class="col-md-12">
            <div class="welcome-heading">
                <h3>Welcome to {{config('app.name')}}</h3>
{{--                <p> {!! $siteSetting->description !!}</p>--}}
            </div>
        </div>
    </div>
        <div class="row manage-links">
            <div class="col-md-4">
                <div class="get-started">
                    <h4>Get Started</h4>
                    <a href="#" class="btn btn-primary">Site Information</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="welcome-list">
                    <h4>Quick Links</h4>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-plus"></i>
                                <span>Category</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-plus"></i>
                                <span>Tag</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-plus"></i>
                                <span>News</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="welcome-list">
                    <h4>More Actions</h4>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-th-large"></i>
                                <span>Manage Groups</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-th-large"></i>
                                <span>Manage Pages</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-th-large"></i>
                                <span>Manage Social Media Links</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-th-large"></i>
                                <span>Manage Contact Request</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</section>

    <div class="row mt-5">
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Groups</span>
                            <h6 class="stats-small__value count my-3">33</h6>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Categories</span>
                            <h6 class="stats-small__value count my-3">33</h6>
                        </div>
                        {{-- <div class="stats-small__data">
                          <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                        </div> --}}
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">News</span>
                            <h6 class="stats-small__value count my-3">22</h6>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Requested Contacts</span>
                            <h6 class="stats-small__value count my-3">11</h6>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-4"></canvas>
                </div>
            </div>
        </div>

      <div class="col-lg col-md-4 col-sm-12 mb-4">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Tags</span>
                <h6 class="stats-small__value count my-3">22</h6>
              </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-5"></canvas>
          </div>
        </div>
      </div>

    </div>


@endsection

