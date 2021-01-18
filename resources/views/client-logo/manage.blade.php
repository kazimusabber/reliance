@extends('admin.master')

@section('title')
    Manage Client 
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manage Client Logo</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Details</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Details</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($client_logos as $client_logo)
                            <tr>
                                <td>{!! $client_logo->title !!}</td>
                                <td>{!! $client_logo->name ?? '' !!}</td>
                                <td>{!! $client_logo->designation ?? '' !!}</td>
                                <td>{!! $client_logo->details ?? '' !!}</td>
                                <td><img style="width: 180px;" src="images/{!! $client_logo->client_logo_img !!}" ></td>
                                <td>{!! $client_logo->status==1 ? 'Published':'Unpublished' !!}</td>
                                <td>
                                    <a href="{!! url('/edit_client-logo/'.$client_logo->id) !!}" class="btn btn-success">
                                        <span class="fa fa-edit"></span>
                                    </a>

                                    <a href="{!! url('/delete_client-logo/'.$client_logo->id) !!}" onclick="return confirm('Are you confirm to Delete?');" class="btn btn-danger">
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
