@extends('admin.master')
@section('title')
    Add post
@endsection


@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary"><strong> Add Post</strong></h6>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-info" href="{!! url('/manage_post') !!}">Post List</a>
                </div>
            </div>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('save_post') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Post Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="title" placeholder="Enter Post Title" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Post Type</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="post_type" placeholder="Post Type" class="form-control">
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="description" id="textarea-input" rows="9" placeholder="Content..."
                                  class="form-control"></textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Image Upload</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="post_img" class="form-control-file">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="status" id="select" class="form-control">
                            <option value="0">Unpublished</option>
                            <option value="1">Published</option>
                        </select>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
