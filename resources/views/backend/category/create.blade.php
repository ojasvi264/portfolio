@extends('backend.layouts.app')
@section('content')
    <!-- Category Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Category Section</span>
            <h3 class="page-title">Add New Category</h3>
        </div>
    </div>
    <!-- End Category Header -->
    <form class="add-new-post" action="{{isset($category)?route('category.update', $category):route('category.store')}}" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                    <div class="card-body">
                        @csrf
                        @if(isset($category))
                            @method('PATCH')
                        @endif
                        <div class="col-md-12 col-sm-12 p-0 pl-3">
                            <label>Name <span class="required">*</span> </label>
                            <input class="form-control form-control-lg mb-3" id="name" type="text" name="name" value="{{old('name')?old('name'):(isset($category)?$category->name:'')}}" placeholder="Your category name">
                            @if($errors->first('name'))
                                <div class="text text-danger">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                
                        <div class="col-md-12 col-sm-12 p-0 pl-3">
                            <label for="message">Description</label>
                            <textarea id="mytextarea" name="description">{!! isset($category)?$category->description:(old('description') ?? '') !!}</textarea>
                            @if($errors->first('description'))
                            <div class="text text-danger">
                                {{$errors->first('description')}}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- / Add New Post Form -->
            </div>
            <div class="col-lg-3 col-md-12">
                <!-- Post Overview -->
                <div class='card card-small mb-3'>
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Actions</h6>
                    </div>
                    <div class='card-body p-0'>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex px-3">
                                    <button type="submit" id="draft" class="btn btn-sm btn-outline-accent" name="status" value="draft">
                                        <i class="material-icons">save</i> Save Draft
                                    </button>
                                    <button type="submit" class="btn btn-sm btn-accent ml-auto">
                                        <i class="material-icons">file_copy</i> Publish
                                    </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- / Post Overview -->
            </div>
        </div>
    </form>
@endsection
