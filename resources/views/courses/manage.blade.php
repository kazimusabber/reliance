@extends('admin.master')

@section('title')
    Manage Program
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Manage Program</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-info" href="{!! url('/add_courses') !!}">New Program</a>
                    </div>
                </div>
                 @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!!  \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>Center Name</th>
                            <th>Course Name</th>
                            <th>Short Description</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Fee</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Center Name</th>
                            <th>Course Name</th>
                            <th>Short Description</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Fee</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($infos as $info)
                            <tr>
                                <td>{!! $info->center->name ?? ''  !!}</td>
                                <td>{!! $info->name ?? '' !!}</td>
                                <td>{!! $info->short_description ?? '' !!}</td>
                                <td>{!! $info->start_date ?? '' !!}</td>
                                <td>{!! $info->end_date ?? '' !!}</td>
                                <td>{!! $info->fee ?? '' !!}</td>
                                <td>{!! $info->status==1 ? 'Published':'Unpublished' !!}</td>
                                <td>
                                    <a href="{!! url('/edit_courses/'.$info->id) !!}" class="btn btn-success">
                                        <span class="fa fa-edit"></span>
                                    </a>

                                    <a href="{!! url('/delete_courses/'.$info->id) !!}" onclick="return confirm('Are you confirm to Delete?');" class="btn btn-danger">
                                        <span class="fa fa-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
