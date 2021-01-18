@extends('admin.master')

@section('title')
    Manage Feature
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manage Feature</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>Feature Header</th>
                            <th>Feature Description</th>
                            <th>Feature Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Feature Header</th>
                            <th>Feature Description</th>
                            <th>Feature Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($features as $feature)
                            <tr>
                                <td>{!! $feature->title !!}</td>
                                <td>{!! $feature->description !!}</td>
                                <td><img style="height: 100px; width: 160px;" src="images/{!! $feature->feature_img !!}" ></td>
                                <td>{!! $feature->status==1 ? 'Published':'Unpublished' !!}</td>
                                <td>
                                    <a href="{!! url('/edit_feature/'.$feature->id) !!}" class="btn btn-success">
                                        <span class="fa fa-edit"></span>
                                    </a>

                                    <a href="{!! url('/delete_feature/'.$feature->id) !!}" onclick="return confirm('Are you confirm to Delete?');" class="btn btn-danger">
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
