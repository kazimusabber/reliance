@extends('admin.master')

@section('title')
    Add Logo
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>ADD Setting</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('save_logo') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Sliding Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="title" placeholder="Enter Title" class="form-control" required>
                        <span class="text-danger">{!! $errors->has('title')? $errors->first('title'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Logo Upload</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="logo_img" class="form-control-file">
                        <span class="text-danger">{!! $errors->has('logo_img')? $errors->first('logo_img'):'' !!}</span>
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
                        <i class="fa fa-dot-circle-o"></i>Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i>Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
