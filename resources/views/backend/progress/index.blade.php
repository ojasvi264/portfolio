@extends('backend.layouts.app')
@section('content')
    <?php

    use Carbon\Carbon; ?>
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <!-- <span class="text-uppercase page-subtitle">Overview</span> -->
            <h3 class="page-title">Progress list</h3>
            <a href="{{route('progress.create')}}" class="btn btn-primary mt-4 ml-2"><i class="fa fa-plus"></i> Add New Progress</a>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Default Light Table -->
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-body p-3 text-center">
                    <div class="table-responsive p-1">
                        <table id="event-table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Percentage</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($progresses as $progress)
                                <tr>
                                    <td class="font-weight-bold">{{ Carbon::parse($progress->created_at)->format('Y M d H:i A')}}
                                    </td>
                                    <td>{{$progress->name}}</td>
                                    <td>{{$progress->percentage}}</td>
                                    <td class="text-center">
                                        @if($progress->status==1)
                                            <span class="shadow-none badge badge-success">Active</span>
                                        @else
                                            <span class="shadow-none badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-warning btn-sm mr-2" href="{{route('progress.edit',$progress)}}">Edit</a>
                                            <form action="{{route('progress.destroy',$progress)}}" method="post" onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger mr-2"><i class="fa fa-trash text-white" title="Delete"></i> </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Default Light Table -->
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $('.alert .close').click()
            }, 3000);
            $('#event-table').DataTable({
                "columnDefs": [{
                    "width": "100px",
                    "targets": 0
                },
                    {
                        "width": "150px",
                        "targets": 1
                    },
                    {
                        "width": "150px",
                        "targets": 2
                    },
                    {
                        "width": "70px",
                        "targets": 3
                    },
                ],
            });
        });
    </script>
@endsection
