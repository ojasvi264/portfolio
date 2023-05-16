<!-- home page about section -->
<section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-4">
                    <div class="position-relative">
                        <img src="{{$about->image}}" alt="" class="radius-image img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 mt-lg-0 mt-5">
                    <h5 class="title-small mb-2">Who am i?</h5>
                    <h3 class="title-big">{{$about->title}}</h3>
                    <p class="mt-4">{!! $about->description !!}</p>
                    <a href="{{$about->document}}" class="btn btn-style btn-primary mt-lg-5 mt-4" download>Download CV</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page about section -->
