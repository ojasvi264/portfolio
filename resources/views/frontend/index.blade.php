@extends('frontend.layouts.app')
@section('styles')
    <style>
        .box-wrap p {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endsection

@section('content')
    @include('frontend.components.home')

    @include('frontend.components.about')


<!-- home page second section -->
{{--<div class="py-5 w3l-resume">--}}
{{--    <div class="container py-lg-5 py-3">--}}
{{--        <h5 class="title-small mb-2"> My resume</h5>--}}
{{--        <h3 class="title-big mb-4">I Would Love to make your Ideas real </h3>--}}
{{--        <p>I love graphic design and photography and have been working on my portfolio since 2016. You can download my--}}
{{--            resume in order to learn the details of my professional life as a designer and photographer. Contact me and--}}
{{--            we will discuss your projects!</p>--}}
{{--        <div class="mt-5">--}}
{{--            <a href="#download" class="btn btn-style btn-primary">Download resume</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- //home page second section -->

    @include('frontend.components.service')

<!-- stats -->
    @include('frontend.components.counter')
<!-- //stats -->
<!-- testimonials -->
{{--<section class="w3l-clients" id="clients">--}}
{{--    <!-- /grids -->--}}
{{--    <div class="cusrtomer-layout py-5">--}}
{{--        <div class="container py-lg-5 py-md-4">--}}
{{--            <div class="heading text-center mx-auto">--}}
{{--                <h6 class="title-small text-center">Testimonials</h6>--}}
{{--                <h3 class="title-big mb-md-5 mb-4">What my clients think about Me </h3>--}}
{{--            </div>--}}
{{--            <!-- /grids -->--}}
{{--            <div class="testimonial-width">--}}
{{--                <div id="owl-demo1" class="owl-carousel owl-theme mb-4">--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimonial-content">--}}
{{--                            <div class="testimonial">--}}
{{--                                <blockquote>--}}
{{--                                    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium--}}
{{--                                        voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.--}}
{{--                                        Dolores molestias adipisci dolor sit amet!.</q>--}}
{{--                                </blockquote>--}}
{{--                                <div class="testi-des">--}}
{{--                                    <div class="test-img"><img src="{{asset('frontend/images/team1.jpg')}}" class="img-fluid" alt="client-img">--}}
{{--                                    </div>--}}
{{--                                    <div class="peopl align-self">--}}
{{--                                        <h3>John wilson</h3>--}}
{{--                                        <p class="indentity">Seattle, Washington</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimonial-content">--}}
{{--                            <div class="testimonial">--}}
{{--                                <blockquote>--}}
{{--                                    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium--}}
{{--                                        voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.--}}
{{--                                        Dolores molestias adipisci dolor sit amet!.</q>--}}
{{--                                </blockquote>--}}
{{--                                <div class="testi-des">--}}
{{--                                    <div class="test-img"><img src="{{asset('frontend/images/team2.jpg')}}" class="img-fluid" alt="client-img">--}}
{{--                                    </div>--}}
{{--                                    <div class="peopl align-self">--}}
{{--                                        <h3>Julia sakura</h3>--}}
{{--                                        <p class="indentity">Seattle, Washington</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimonial-content">--}}
{{--                            <div class="testimonial">--}}
{{--                                <blockquote>--}}
{{--                                    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium--}}
{{--                                        voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.--}}
{{--                                        Dolores molestias adipisci dolor sit amet!.</q>--}}
{{--                                </blockquote>--}}
{{--                                <div class="testi-des">--}}
{{--                                    <div class="test-img"><img src="{{asset('frontend/images/team3.jpg')}}" class="img-fluid" alt="client-img">--}}
{{--                                    </div>--}}
{{--                                    <div class="peopl align-self">--}}
{{--                                        <h3>Roy Linderson</h3>--}}
{{--                                        <p class="indentity">Seattle, Washington</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimonial-content">--}}
{{--                            <div class="testimonial">--}}
{{--                                <blockquote>--}}
{{--                                    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium--}}
{{--                                        voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.--}}
{{--                                        Dolores molestias adipisci dolor sit amet!.</q>--}}
{{--                                </blockquote>--}}
{{--                                <div class="testi-des">--}}
{{--                                    <div class="test-img"><img src="{{asset('frontend/images/team4.jpg')}}" class="img-fluid" alt="client-img">--}}
{{--                                    </div>--}}
{{--                                    <div class="peopl align-self">--}}
{{--                                        <h3>Mike Thyson</h3>--}}
{{--                                        <p class="indentity">Seattle, Washington</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimonial-content">--}}
{{--                            <div class="testimonial">--}}
{{--                                <blockquote>--}}
{{--                                    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium--}}
{{--                                        voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.--}}
{{--                                        Dolores molestias adipisci dolor sit amet!.</q>--}}
{{--                                </blockquote>--}}
{{--                                <div class="testi-des">--}}
{{--                                    <div class="test-img"><img src="{{asset('frontend/images/team2.jpg')}}" class="img-fluid" alt="client-img">--}}
{{--                                    </div>--}}
{{--                                    <div class="peopl align-self">--}}
{{--                                        <h3>Laura gill</h3>--}}
{{--                                        <p class="indentity">Seattle, Washington</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimonial-content">--}}
{{--                            <div class="testimonial">--}}
{{--                                <blockquote>--}}
{{--                                    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium--}}
{{--                                        voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.--}}
{{--                                        Dolores molestias adipisci dolor sit amet!.</q>--}}
{{--                                </blockquote>--}}
{{--                                <div class="testi-des">--}}
{{--                                    <div class="test-img"><img src="{{asset('frontend/images/team3.jpg')}}" class="img-fluid" alt="client-img">--}}
{{--                                    </div>--}}
{{--                                    <div class="peopl align-self">--}}
{{--                                        <h3>Smith Johnson</h3>--}}
{{--                                        <p class="indentity">Seattle, Washington</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- /grids -->--}}
{{--    </div>--}}
{{--    <!-- //grids -->--}}
{{--</section>--}}
<!-- //testimonials -->

<!-- home page video popup section -->
{{--<section class="w3l-index5" id="about">--}}
{{--    <div class="new-block py-5">--}}
{{--        <div class="container py-lg-5">--}}
{{--            <div class="middle-section text-center">--}}
{{--                <div class="section-width">--}}
{{--                    <h3 class="title-big">I can give your business a new creative start right away! Hire me for your--}}
{{--                        Awesome project</h3>--}}
{{--                    <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, corrupti odit? At iure--}}
{{--                        facere,--}}
{{--                        porro repellat officia quas, dolores magnam assumenda soluta odit--}}
{{--                        harum--}}
{{--                        voluptate inventore ipsa maiores fugiat accusamus eos nulla. Iure voluptatibus explicabo--}}
{{--                        officia.</p>--}}
{{--                </div>--}}
{{--                <div class="history-info mt-5">--}}
{{--                    <div class="position-relative">--}}
{{--                        <img src="{{asset('frontend/images/bg.jpg')}}" class="img-fluid radius-image video-popup-image"--}}
{{--                             alt="video-popup">--}}

{{--                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">--}}
{{--                            <span class="video-play-icon">--}}
{{--                                <span class="fa fa-play"></span>--}}
{{--                            </span>--}}
{{--                        </a>--}}

{{--                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->--}}
{{--                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">--}}
{{--                            <iframe src="https://www.youtube.com/embed/Cu2VnoRcxKM" allowfullscreen></iframe>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->--}}
{{--                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">--}}
{{--                    <iframe src="https://www.youtube.com/embed/Z_KspIX1oXU" allowfullscreen></iframe>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- //home page video popup section -->

<!-- freelance hire me -->
<section class="w3l-grid-quote text-center py-5">
    <div class="container py-3">
        <h6 class="title-small">Get in touch</h6>
        <h3 class="title-big mb-md-5 mb-4">Let's start a Project! Hire Me.</h3>
        <a href="contact.html" class="btn btn-style btn-primary mr-2">Hire Me </a>
        <a href="contact.html" class="btn btn-style btn-outline-primary">Get in touch</a>
    </div>
</section>
<!-- //freelance hire me -->
@endsection
