@extends('frontend.layouts.app')
@section('content')
<!-- contact breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
        <div class="container py-2">
            <h2 class="title">Contact Me</h2>
            <ul class="breadcrumbs-custom-path mt-2">
                <li><a href="{{route('frontend.index')}}">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li>
            </ul>
        </div>
    </div>
    @if(Session::has('msg') || Session::has('error'))
        <div class="col-md-4 col-sm-5 float-right alert @if(Session::has('msg')) alert-success @else alert-danger @endif alert-dismissible m-2 mt-4 fade show" role="alert">
            {{Session::get('msg') ?? Session::get('error')}}.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
</section>
<!-- contact breadcrumb -->

<!-- contact block -->
<!-- contact1 -->
<section class="w3l-contact-1 py-5">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="d-grid contact-view">
                <div class="cont-details">
                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Call Me</h6>
                            <p><a href="tel:+44 99 555 42">{{$siteSetting->phone}}</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Email Me</h6>
                            <p><a href="mailto:{{$siteSetting->email}}" class="mail">{{$siteSetting->email}}</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Location</h6>
                            <p>{{$siteSetting->address}}</p>
                        </div>
                    </div>
                </div>
                <div class="map-content-9">
                    <form action="{{route('frontend.contact.store')}}" method="post">
                        @csrf
                        <div class="twice-two">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                   required="">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                   required="">
                        </div>
                        <div class="twice">
                            <input type="text" class="form-control" name="subject" id="subject"
                                   placeholder="Subject" required="">
                        </div>
                        <textarea name="message" class="form-control" id="message" placeholder="Message"
                                  required=""></textarea>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-style mt-4">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /contact1 -->
{{--<div class="map-iframe">--}}
{{--    <iframe--}}
{{--        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"--}}
{{--        width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>--}}
{{--</div>--}}
<!-- //contact block -->
@endsection
