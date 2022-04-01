<!-- home page services section -->
<section class="w3l-services">
    <div class="blog py-5" id="services">
        <div class="container py-lg-5">
            <h5 class="title-small text-center">Services</h5>
            <h3 class="title-big text-center mb-sm-5 mb-4">What I do for you</h3>
            <div class="row">
                <div class="col-md-12 mx-auto pr-2">
                    <div class="owl-two owl-carousel owl-theme">
                        @foreach($services as $key => $service)
                            <div class="item">
                                <div class="card">
                                    <div class="box-wrap">
                                        <div class="icon">
                                            <span class="fa fa-pencil-square-o"></span>
                                        </div>
                                        <h4 class="number">{{$key+1}}</h4>
                                        <h4><a href="#url">{{$service->title}}</a></h4>
                                        <p>{{$service->short_description}}</p>
                                        <a href="#read" class="read">Read more</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="mt-5 text-more">
                <p class="mt-4 pt-3 sample text-center">
                    <a href="services.html">View All Services <span class="pl-2 fa fa-long-arrow-right"></span></a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- //home page services section -->
