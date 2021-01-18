@extends('admin.master')

@section('title')
   Student List
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Student Infomation</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                            
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>mobile</th>
                            <th>email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                       
                        <tbody>
                        @foreach($info as $value)
                            <tr>
                                <td>{!! $value->id ?? '' !!}</td>
                                <td>{!! $value->first_name ?? '' !!}</td>
                                <td>{!! $value->mobile ?? '' !!}</td>
                                <td>{!! $value->email ?? '' !!}</td>
                                <td>@if($value->status==1) <span style="color: red;font-weight: bold;">New</span> @else <span style="color: green;font-weight: bold;">Seen</span> @endif</td>
                                <td>
                                    <a class="btn btn-success" href="{{url('student-info')}}/{{$value->id}}">
                                        <span class="fa fa-eye"></span>
                                    </a>
                                    <a  class="btn btn-info" href="{{url('studentallfile')}}/{{$value->id}}">
                                        <span class="fa fa-file"></span>
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
