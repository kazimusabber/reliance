@extends('admin.master')

@section('title')
    Add Slider
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary"><strong> Post List</strong></h6>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-info" href="{!! url('/add_post') !!}">Add Post</a>
                </div>
            </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>Post Title</th>
                            <th>Post Type</th>
                            <th>Post Image</th>
                            <th>Post Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Post Title</th>
                            <th>Post Type</th>
                            <th>Post Image</th>
                            <th>Post Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{!! $post->title !!}</td>
                                <td>{!! $post->post_type !!}</td>
                                <td><img src="images/{!! $post->post_img !!}" style="height: 100px; width: 160px;"></td>
                                <td>{!! $post->description !!}</td>
                                <td>{!! $post->status==1 ? 'Published':'Unpublished' !!}</td>
                                <td>
                                    <a href="{!! url('/edit_post/'.$post->id) !!}" class="btn btn-success">
                                        <span class="fa fa-edit"></span>
                                    </a>

                                    <a href="{!! url('/delete_post/'.$post->id) !!}" onclick="return confirm('Are you confirm to Delete?');" class="btn btn-danger">
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
