@extends('admin.master')
@section('title')
    Edit Skills
@endsection


@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>Edit Skill</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('update_skill') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Technology</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $skillById->tech_title !!}" id="text-input" name="tech_title" placeholder="Enter Technology Name...." class="form-control">
                        <input type="hidden" value="{!! $skillById->id !!}" id="text-input" name="id">
                        <span class="text-danger">{!! $errors->has('tech_title')? $errors->first('tech_title'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Skill Level(Percent)</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $skillById->work_percent !!}" id="text-input" name="work_percent" placeholder="Enter Percent of Skill Level" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="status" value="{!! $skillById->status !!}" id="select" class="form-control">
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
