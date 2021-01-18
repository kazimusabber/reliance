@extends('admin.master')

@section('title')
    Edit Mission
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>Edit Mission</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('update_mission') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Mission Header</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $missionById->title !!}" id="text-input" name="title" placeholder="Enter Title" class="form-control" required>
                        <input type="hidden" value="{!! $missionById->id !!}" id="text-input" name="id">
                        <span class="text-danger">{!! $errors->has('title')? $errors->first('title'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Mission Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="description" class="form-control" >{!! $missionById->description !!}</textarea>
                        <span class="text-danger">{!! $errors->has('description')? $errors->first('description'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="status"  id="select" class="form-control">
                            <option @if($missionById->status==0)selected @endif value="0" >Unpublished</option>
                            <option @if($missionById->status==1) selected @endif value="1">Published</option>
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
