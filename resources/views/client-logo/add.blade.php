@extends('admin.master')

@section('title')
    Add Client 
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>ADD Client</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('save_client-logo') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="title" placeholder="Enter Title" class="form-control" required>
                        <span class="text-danger">{!! $errors->has('title')? $errors->first('title'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="client_name" placeholder="Enter client name" class="form-control" required>
                        <span class="text-danger">{!! $errors->has('client_name')? $errors->first('client_name'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Designation</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="designation" placeholder="Enter designation" class="form-control" required>
                        <span class="text-danger">{!! $errors->has('designation')? $errors->first('designation'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Details</label>
                    </div>
                    <div class="col-12 col-md-9">
                       
                        <textarea id="mytextarea" name="details" placeholder="Enter details" class="form-control" required></textarea>
                        <span class="text-danger">{!! $errors->has('details')? $errors->first('details'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Client Logo Upload</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="client_logo_img" class="form-control-file">
                        <span class="text-danger">{!! $errors->has('client_logo_img')? $errors->first('client_logo_img'):'' !!}</span>
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
