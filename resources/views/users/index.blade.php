@extends('admin.master')

@section('title')
   Student List
@endsection

@section('body')
    <div class="container-fluid">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!!  \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Student List</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-info" href="{{url('new-user')}}">New User</a>
                    </div>
                    
                </div>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                            
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Type</th>
                            <th>Center</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                       
                        <tbody>
                        @foreach($info as $value)
                            <tr>
                                <td>{!! $value->name ?? '' !!}</td>
                                <td>{!! $value->email ?? '' !!}</td>
                                <td>{!! $value->user_type ?? '' !!}</td>
                                <td>{!! $value->center->name ?? '' !!}</td>
                                <td>
                                    <a  class="btn btn-success" href="{{url('user-info')}}/{{$value->id}}">
                                        <span class="fa fa-edit"></span>
                                    </a> 
                                    <a href="{!! url('/user-delete/'.$value->id) !!}" onclick="return confirm('Are you confirm to Delete?');" class="btn btn-danger">
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
