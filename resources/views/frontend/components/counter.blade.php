<section class="w3l-stats py-lg-5 py-4" id="stats">
    <div class="gallery-inner container py-md-5 py-4">
        <div class="row stats-con">
            <div class="col-sm-3 col-6 stats_info counter_grid">
                <span class="fa fa-laptop"></span>
                <p class="counter">{{$about->completed_projects}}</p>
                <h4>Completed projects</h4>
            </div>
            <div class="col-sm-3 col-6 stats_info counter_grid1">
                <span class="fa fa-hourglass-end"></span>
                <p class="counter">{{$about->ongoing_projects}}</p>
                <h4>In processes</h4>
            </div>
            <div class="col-sm-3 col-6 stats_info counter_grid mt-sm-0 mt-5">
                <span class="fa fa-gift"></span>
                <p class="counter">{{$about->companies}}</p>
                <h4>Companies</h4>
            </div>
            <div class="col-sm-3 col-6 stats_info counter_grid2 mt-sm-0 mt-5">
                <span class="fa fa-smile-o"></span>
                <p class="counter">{{$about->experience}}</p>
                <h4>Experience</h4>
            </div>
        </div>
    </div>
</section>
