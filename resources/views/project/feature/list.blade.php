@extends('admin.master')

@section('title')
    Manage Project
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-12">
                <h6 class="m-0 font-weight-bold text-primary">Manage Projects</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Feature</th>
                            <th>Serial</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rows as $row)
                            <tr>
                                <td>{!! $row->ProjectName->project_name ?? null  !!}</td>
                                <td>{!! $row->feature ?? null !!}</td>
                                <td>{!! $row->serial ?? null  !!}</td>
                                <td>{!! $row->status==1 ? 'Published':'Unpublished' !!}</td>
                                <td>
                                    <a href="{!! url('/edit-feature/'.$row->id) !!}" class="btn btn-success">
                                        <span class="fa fa-edit"></span>
                                    </a>
                                    <a href="{!! url('/delete-feature/'.$row->id) !!}" onclick="return confirm('Are you confirm to Delete?');" class="btn btn-danger">
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
