@extends('admin.master')

@section('title')
    Manage Project
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manage Projects</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Project Type</th>
                            <th>Project Description</th>
                            <th>Project Image</th>
                            <th>Project Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Project Name</th>
                            <th>Project Type</th>
                            <th>Project Description</th>
                            <th>Project Image</th>
                            <th>Project Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{!! $project->project_name !!}</td>
                                <td>{!! $project->getName->project_type !!}</td>
                                <td>{!! $project->description !!}</td>
                                <td><img src="images/{!! $project->project_img !!}" style="height: 100px; width: 160px;"></td>
                                <td>{!! $project->service_status==1 ? 'Published':'Unpublished' !!}</td>
                                <td>
                                    <a href="{!! url('/edit_project/'.$project->id) !!}" class="btn btn-success">
                                        <span class="fa fa-edit"></span>
                                    </a>
                                    <a href="{!! url('/delete_project/'.$project->id) !!}" onclick="return confirm('Are you confirm to Delete?');" class="btn btn-danger">
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
