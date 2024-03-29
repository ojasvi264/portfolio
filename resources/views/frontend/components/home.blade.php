<!-- banner section -->
<section id="home" class="w3l-banner py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-12 mt-lg-0 mt-4">
                <span class="title-small">Hello</span>
                <h1 class="mb-2 title"> <span>I'm</span> {{$siteSetting->name}} </h1>
                <h1 class="mb-4 title"> a <span class="typed-text"></span><span class="cursor">&nbsp</span></h1>
                <p>{!! $siteSetting->description !!}</p>
                <div class="mt-sm-5 mt-4">
                    <a class="btn btn-primary btn-style mr-2" href="mailto:{{$siteSetting->email}}"> Hire Me </a>
                    <a class="btn btn-outline-primary btn-style mr-2" href="{{route('frontend.about')}}"> Portfolio </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-10 mt-lg-0 mt-4">
                <div class="img-effect text-lg-center">
                    <img src="{{$siteSetting->image}}" alt="myphoto" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //banner section -->
