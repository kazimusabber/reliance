@extends('admin.master')
@section('title')
    Edit Contact Setup
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>Edit Contact Setup</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('update_contact_setup') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Office Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" value="{!! $contactSetupById->office_title !!}" name="office_title" placeholder="Enter Job Title" class="form-control">
                        <input type="hidden" id="text-input" value="{!! $contactSetupById->id !!}" name="id">
                        <span class="text-danger">{!! $errors->has('office_title')? $errors->first('office_title'):'' !!}</span>
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
