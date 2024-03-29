@extends('frontend.layouts.app')
@section('styles')
    <style>
        .subscribe{
            padding-left: 611px;
        }
    </style>
@endsection
@section('content')
<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
        <div class="container py-2">
            <h2 class="title">About Me</h2>
            <ul class="breadcrumbs-custom-path mt-2">
                <li><a href="{{route('frontend.index')}}">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About Me </li>
            </ul>
        </div>
    </div>
</section>
<!-- //about breadcrumb -->

<!-- about page about section -->
<section class="w3l-aboutblock1" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-4">
                    <div class="position-relative">
                        <img src="{{$about->image}}" alt="" class="radius-image img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 mt-lg-0 mt-5">
                    <h5 class="title-small mb-2">{{$about->title}}</h5>
                    <h3 class="title-big">Having {{$about->experience}} Years of Experience</h3>
                    <p class="mt-4">{!! $about->description !!}</p>
                    <div class="my-info mt-4">
                        <div class="single-info"><span>Name:</span>
                            <p>{{$siteSetting->name}}</p>
                        </div>
                        <div class="single-info"><span>Age:</span>
                            <p>{{$siteSetting->age}} Years</p>
                        </div>
                        <div class="single-info"><span>From:</span>
                            <p>{{$siteSetting->address}}</p>
                        </div>
                        <div class="single-info"><span>Email:</span>
                            <p><a href="mailto:{{$siteSetting->email}}">{{$siteSetting->email}}</a></p>
                        </div>
                    </div>
                    <div class="my-social mt-lg-5 mt-4">
                        <a href="#download" class="btn btn-style btn-primary">Download CV</a>
                        <ul class="social m-0 p-0">
                            <li><a href="{{$siteSetting->twitter_link}}" target="_blank"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="{{$siteSetting->instagram_link}}" target="_blank"><span class="fa fa-instagram"></span></a></li>
                            <li><a href="{{$siteSetting->facebook_link}}" target="_blank"><span class="fa fa-facebook-official"></span></a></li>
                            <li><a href="{{$siteSetting->linkedin_link}}" target="_blank"><span class="fa fa-linkedin-square"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //about page about section -->

<!-- about page second section -->
<div class="py-5 w3l-resume">
    <div class="container py-lg-5 py-3">
        <h5 class="title-small mb-2"> Hello</h5>
        <h3 class="title-big mb-4">I Can give your business a new Creative start right away! </h3>
        <p>I am a skilled backend developer with a passion for software development. Throughout my career, I have successfully developed numerous websites and software applications, showcasing my expertise in various programming languages and frameworks. My attention to detail and problem-solving abilities have earned me a reputation for delivering high-quality solutions.<p><br>

<p>Looking to expand my skills, I am aspiring to become a full stack developer. With my determination and aptitude for learning new technologies, I am well-equipped to pursue my goal of becoming a versatile and well-rounded developer. As I continue to grow in my career, I remain committed to pushing the boundaries of my capabilities and contributing to the advancement of the software development industry.</p>
        <div class="row features-w3pvt-main mt-5 pt-md-3" id="features">
            <div class="col-lg-3 col-md-6 feature-gird">
                <div class="row features-hny-inner-gd">
                    <div class="col-md-2 col-2 featured_grid_left">
                        <div class="icon_left_grid">
                            <span class="fa fa-laptop" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-md-10 col-10 featured_grid_right_info">
                        <h4><a class="link-hny" href="#url">Database Design </a></h4>
                        <p>Lorem ipsum dolor sit amet elit consec tetur adipisi elit., rem!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-gird mt-md-0 mt-4">
                <div class="row features-hny-inner-gd">
                    <div class="col-md-2 col-2 featured_grid_left">
                        <div class="icon_left_grid">
                            <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-md-10 col-10 featured_grid_right_info">
                        <h4><a class="link-hny" href="#url">Backend Development </a></h4>
                        <p>Lorem ipsum dolor sit amet elit consec tetur adipisi elit., rem!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-gird mt-lg-0 mt-md-5 mt-4">
                <div class="row features-hny-inner-gd">
                    <div class="col-md-2 col-2 featured_grid_left">
                        <div class="icon_left_grid">
                            <span class="fa fa-desktop" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-md-10 col-10 featured_grid_right_info">
                        <h4><a class="link-hny" href="#url">Frontend Design and Integration</a></h4>
                        <p>Lorem ipsum dolor sit amet elit consec tetur adipisi elit., rem!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-gird mt-lg-0 mt-md-5 mt-4">
                <div class="row features-hny-inner-gd">
                    <div class="col-md-2 col-2 featured_grid_left">
                        <div class="icon_left_grid">
                            <span class="fa fa-desktop" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-md-10 col-10 featured_grid_right_info">
                        <h4><a class="link-hny" href="#url">Web Hosting</a></h4>
                        <p>Lorem ipsum dolor sit amet elit consec tetur adipisi elit., rem!</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- //about page about section -->

<!-- about page third section -->
<!-- <section class="w3l-content-6 py-5">
    <div class="content-6-mian py-lg-5 py-md-4">
        <div class="container">
            <div class="content-info-in row">
                <div class="content-gd col-lg-5">
                    <h3 class="title-big mb-4">Motivated by the Desire to achieve Success</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem, odit! Perspiciatis et
                        consequuntur non, modi quo mollitia labore laborum voluptas quia officiis fugit soluta molestias
                        quaerat sapiente sunt.
                    </p>
                </div>
                @if(!$progresses->isEmpty())
                <div class="content-gd col-lg-6 offset-lg-1">
                    @foreach($progresses as $progress)
                    <div class="progress-info">
                        <h6 class="progress-tittle">{{$progress->name}}</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{$progress->percentage}}%"
                                 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
</section> -->
<!-- about page third section -->

<!-- subscribe block -->
<div class="">
{{--    <div class="img-one">--}}
{{--        <img src="{{asset('frontend/images/g5.jpg')}}" alt=" " class="img-fluid">--}}
{{--    </div>--}}
    <!-- <div class="img-one content-mid text-center">
        <h3 class="title-big mt-5"> Stay up to date, Subscribe to the free Newsletter! </h3>
        <div class="subscribe mb-5">
            <form action="#url" method="GET" class="subscribe-form">
                <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit" class="btn">Subscribe</button>
            </form>
        </div>

    </div> -->
{{--    <div class="img-one">--}}
{{--        <img src="{{asset('frontend/images/g3.jpg')}}" alt=" " class="img-fluid">--}}
{{--    </div>--}}
</div>
<!-- //subscribe block -->

<!-- achievements block -->
<section class="w3l-services">
    <div class="w3l-achievements py-5" id="services">
        <div class="container py-lg-5">
            <h5 class="title-small text-center">My achievements</h5>
            <h3 class="title-big text-center mb-sm-5 mb-4">Personal Awards</h3>
            <div class="row">
                <div class="col-lg-6 item">
                    <div class="card">
                        <div class="box-wrap">
                            <div class="icon">
                                <span class="fa fa-globe"></span>
                            </div>
                            <h4><a href="#url">Website of the day</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi reiciendis labore quisquam
                                suscipit qui veritatis. voluptas quia officiis fugit soluta sunt</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 item">
                    <div class="card">
                        <div class="box-wrap">
                            <div class="icon">
                                <span class="fa fa-laptop"></span>
                            </div>
                            <h4><a href="#url"> Awards Site Of The Day</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi reiciendis labore quisquam
                                suscipit qui veritatis. voluptas quia officiis fugit soluta sunt</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 item">
                    <div class="card">
                        <div class="box-wrap mb-lg-0">
                            <div class="icon">
                                <span class="fa fa-trophy"></span>
                            </div>
                            <h4><a href="#url">Honorable mention award</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi reiciendis labore quisquam
                                suscipit qui veritatis. voluptas quia officiis fugit soluta sunt</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 item">
                    <div class="card">
                        <div class="box-wrap mb-0">
                            <div class="icon">
                                <span class="fa fa-laptop"></span>
                            </div>
                            <h4><a href="#url">Designer of the Company</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi reiciendis labore quisquam
                                suscipit qui veritatis. voluptas quia officiis fugit soluta sunt</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- //achievements block -->
@endsection
