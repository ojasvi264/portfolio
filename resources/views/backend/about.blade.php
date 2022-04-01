@extends('backend.layouts.app')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">About</span>
            <h3 class="page-title">About Setting</h3>
        </div>
    </div>
    <!-- End Page Header -->

    <form class="row m-0 add-new-post" action="{{route('about.store')}}" method="POST"
          enctype="multipart/form-data">
        {{-- <div class="row"> --}}
        <div class="col-lg-9 col-md-12">
            <!-- Add New Post Form -->
            <div class="card card-small mb-3">
                <div class="card-body">
                    @csrf
                    @if(isset($edit))
                        @method('POST')
                        <input type="hidden" name="id" value="{{$edit->id}}"/>
                    @endif
                    <div class="col-md-12 col-sm-12 p-0 pl-3">
                        <label for="title" class="">Title<span class="required">*</span> </label>
                        <input class="form-control form-control-lg mb-1" id="title" type="text" name="title"
                               value="{{old('title')?old('title'):(isset($edit)?$edit->title:'')}}"
                               placeholder="Input Name">
                        @if($errors->first('title'))
                            <div class="text text-danger ">
                                {{$errors->first('title')}}
                            </div>
                        @endif
                    </div>
                    <div class="row pr-3">
                        <div class="col-md-6 col-sm-6 p-0 pl-3">
                            <label for="completed_projects" class=""> Completed Projects<span class="required">*</span> </label>
                            <input class="form-control form-control-lg mb1" id="completed_projects" type="number" name="completed_projects"
                                   value="{{old('completed_projects')?old('completed_projects'):(isset($edit)?$edit->completed_projects:'')}}"
                                   placeholder="Input Completed Projects">
                            @if($errors->first('completed_projects'))
                                <div class="text text-danger">
                                    {{$errors->first('completed_projects')}}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 col-sm-6 p-0 pl-3">
                            <label for="ongoing_projects">Ongoing Projects <span class="required">*</span> </label>
                            <input class="form-control form-control-lg mb-1" id="ongoing_projects" type="number" name="ongoing_projects" value="{{old('ongoing_projects')?old('ongoing_projects'):(isset($edit)?$edit->ongoing_projects:'')}}" placeholder="Your Ongoing Projects">
                            @if($errors->first('ongoing_projects'))
                                <div class="text text-danger">
                                    {{$errors->first('ongoing_projects')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row pr-3">
                        <div class="col-md-6 col-sm-6 p-0 pl-3">
                            <label for="companies">Companies <span class="required">*</span> </label>
                            <input class="form-control form-control-lg mb-1" id="companies" type="number" name="companies" value="{{old('companies')?old('companies'):(isset($edit)?$edit->companies:'')}}" placeholder="Your Companies">
                            @if($errors->first('companies'))
                                <div class="text text-danger">
                                    {{$errors->first('companies')}}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 col-sm-6 p-0 pl-3">
                            <label for="experience">Experience <span class="required">*</span> </label>
                            <input class="form-control form-control-lg mb-1" id="experience" type="number" name="experience" value="{{old('experience')?old('experience'):(isset($edit)?$edit->experience:'')}}" placeholder="Your Experience">
                            @if($errors->first('experience'))
                                <div class="text text-danger">
                                    {{$errors->first('experience')}}
                                </div>
                            @endif
                        </div>
                    </div>
{{--                    <div class="col-md-12 col-sm-12 p-0 pl-3">--}}
{{--                        <label>Map Iframe Location </label>--}}
{{--                        @if($errors->first('map_iframe'))--}}
{{--                            <div class="text text-danger">--}}
{{--                                *{{$errors->first('map_iframe')}}--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                        <textarea class="form-control" rows="4"--}}
{{--                                  name="map_iframe">{!! isset($edit)?$edit->map_iframe:(old('map_iframe') ?? '') !!}</textarea>--}}
{{--                    </div>--}}

                    <br>
                    <div class="col-md-12 col-sm-12 p-0 pl-3">
                        <label>Description<span class="required">*</span> </label>
                        @if($errors->first('description'))
                            <div class="text text-danger">
                                *{{$errors->first('description')}}
                            </div>
                        @endif
                        <textarea id="mytextarea"
                                  name="description">{!! isset($edit)?$edit->description:(old('description') ?? '') !!}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
                <div class="card-header border-bottom">
                    <h6 class="m-0">Actions</h6>
                </div>
                <div class='card-body p-0'>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
						<span class="d-flex mb-2">
							<i class="material-icons mr-1">flag</i>
							<strong class="mr-1">Status:</strong>@if(isset($edit))<span class="text text-success">Created </span>@else
                                <span class="text text-danger">Not Created</span> @endif
						</span>
                        </li>
                        <li class="list-group-item d-flex px-3">
                            @if(isset($edit))
                                <button type="submit" id="update" class="btn btn-sm btn-accent ml-auto">
                                    <i class="material-icons">file_copy</i> Update
                                </button>
                            @else
                                <button type="submit" id="save" class="btn btn-sm btn-accent ml-auto">
                                    <i class="material-icons">file_copy</i> Publish
                                </button>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
            <!-- / Post Overview -->
        </div>
    </form>
    {{-- </div> --}}

    <script type="text/javascript">
        $('#mediaFile').on('change', function () {
            $('#logo').removeClass('d-none').addClass('d-block');
            $('#logo').attr('src', window.URL.createObjectURL(this.files[0]));
        });
        // $(function() {
        // 	$('#save').on('click', function(e) {
        // 		e.preventDefault();
        // 		$('form').submit();
        // 	})
        // 	$('#update').on('click', function(e) {
        // 		e.preventDefault()
        // 		$('form').submit();

        // 	});
        // });
    </script>

@endsection
