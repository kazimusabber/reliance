@extends('admin.master')
@section('title')
   Edit SC Information
@endsection


@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>Edit SC Information</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('update_info') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $skillById->title !!}" id="text-input" name="title" placeholder="Enter Technology Name...." class="form-control">
                        <input type="hidden" value="{!! $skillById->id !!}" id="text-input" name="id">
                        <span class="text-danger">{!! $errors->has('title')? $errors->first('title'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Quantity</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $skillById->quantity !!}" id="text-input" name="quantity" placeholder="Enter Quantity" class="form-control">
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Add Plus</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $skillById->add_plus !!}" id="text-input" name="add_plus" placeholder="Enter Plus Sign" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="status"  id="select" class="form-control">
                            <option @if($skillById->status==0)selected @endif value="0" >Unpublished</option>
                            <option @if($skillById->status==1) selected @endif value="1">Published</option>
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
