<!-- Main Sidebar -->
<?php //
//  $maintenance = Cache::get('maintenance') ?? 'off';
//?>
<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
    <div class="main-navbar">
        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="{{route('dashboard')}}" style="line-height: 25px;">
                <div class="d-table m-auto">
                    {{--          <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="{{asset('images/shards-dashboards-logo.svg')}}" alt="Shards Dashboard">--}}
                    <span class="d-none d-md-inline ml-1">{{config('app.name')}} Dashboard</span>
                </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
            </a>
        </nav>
    </div>
    <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
        <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search for something..."
                   aria-label="Search"></div>
    </form>

    {{--  <div class="row p-3">--}}
    {{--    <label id="labelMaintenance" for="maintenance" class="mx-auto">Maintenance Mode</label>--}}
    {{--    <div class="custom-control custom-switch ml-auto">--}}
    {{--        <input type="checkbox" class="custom-control-input" id="maintenance" onclick="$('#maintenanceForm').submit()" {{ $maintenance=='on'?'Checked':'' }}>--}}
    {{--        <label class="custom-control-label" onclick="$('#labelMaintenance').click()"></label>--}}
    {{--    </div>--}}
    {{--</div>--}}
    {{--<form id="maintenanceForm" action="#" method="post">--}}
    {{--    @csrf--}}
    {{--</form>--}}
    <div class="nav-wrapper accordion" id="accordionExample">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="material-icons">edit</i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link " href="components-blog-posts.html">
                <i class="material-icons">vertical_split</i>
                <span>Blog Posts</span>
              </a>
            </li> -->

            <div class="nav-item has-child">
                <div class="card-header p-0 m-0" id="headingTwo">
                    <div class="nav-link collapsed d-flex align-items-center" data-toggle="collapse"
                         data-target="#collapseTwo"
                         aria-expanded="false" aria-controls="collapseTwo">
                        <i class="material-icons">note_add</i>
                        <span> Settings</span>
                        <i class="fa fa-plus ml-auto"></i>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body p-0">
                        <a class="nav-link p-2 pl-5" href="{{route('site-setting.index')}}">
                            <i class="material-icons">note_add</i>
                            <span>Site Settings</span>
                        </a>
                        {{--                <a class="nav-link p-2 pl-5" href="#">--}}
                        {{--                    <i class="material-icons">note_add</i>--}}
                        {{--                    <span>Main News Setting</span>--}}
                        {{--                </a>--}}

                        {{--                <a class="nav-link p-2 pl-5" href="#">--}}
                        {{--                    <i class="material-icons">note_add</i>--}}
                        {{--                    <span>Add Province</span>--}}
                        {{--                </a>--}}
                        {{--              <a class="nav-link p-2 pl-5" href="#">--}}
                        {{--                <i class="material-icons">note_add</i>--}}
                        {{--                <span>Image Slider</span>--}}
                        {{--              </a>--}}
                        {{--              <a class="nav-link p-2 pl-5" href="#">--}}
                        {{--                <i class="material-icons">note_add</i>--}}
                        {{--                <span>Useful Links</span>--}}
                        {{--              </a>--}}
                        {{--              <a class="nav-link p-2 pl-5" href="#">--}}
                        {{--                <i class="material-icons">note_add</i>--}}
                        {{--                <span>Social Media Links</span>--}}
                        {{--              </a>--}}
                        {{--              <a class="nav-link p-2 pl-5" href="#">--}}
                        {{--                <i class="material-icons">note_add</i>--}}
                        {{--                <span>Requested Contacts</span>--}}
                        {{--              </a>--}}
                    </div>
                </div>
            </div>
            <div class="nav-item has-child">
                <div class="card-header p-0 m-0" id="heading3">
                    <div class="nav-link collapsed d-flex align-items-center" data-toggle="collapse"
                         data-target="#collapse3"
                         aria-expanded="false" aria-controls="collapseTwo">
                        <i class="material-icons">note_add</i>
                        <span> Service Setup</span>
                        <i class="fa fa-plus ml-auto"></i>
                    </div>
                </div>
                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                    <div class="card-body p-0">
                        <a class="nav-link p-2 pl-5" href="{{route('service.create')}}">
                            <i class="material-icons">note_add</i>
                            <span>Add Service</span>
                        </a>
                        <a class="nav-link p-2 pl-5" href="{{route('service.index')}}">
                            <i class="material-icons">note_add</i>
                            <span>Service List</span>
                        </a>
                    </div>
                </div>
            </div>
                    <div class="nav-item has-child">
                        <div class="card-header p-0 m-0" id="heading3">
                            <div class="nav-link collapsed d-flex align-items-center" data-toggle="collapse" data-target="#collapse2"
                                 aria-expanded="false" aria-controls="collapseTwo">
                                <i class="material-icons">note_add</i>
                                <span> Progress Bar Setup</span>
                                <i class="fa fa-plus ml-auto"></i>
                            </div>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                            <div class="card-body p-0">
                                <a class="nav-link p-2 pl-5" href="{{route('progress.create')}}">
                                    <i class="material-icons">note_add</i>
                                    <span>Add Progress</span>
                                </a>
                                <a class="nav-link p-2 pl-5" href="{{route('progress.index')}}">
                                    <i class="material-icons">note_add</i>
                                    <span>Progress List</span>
                                </a>
                            </div>
                        </div>
                    </div>
            <li class="nav-item">
                <a class="nav-link " href="{{route('about.index')}}">
                    <i class="material-icons">note_add</i>
                    <span>About Page</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('contact.index')}}">
                    <i class="material-icons">note_add</i>
                    <span>Contact Page</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
