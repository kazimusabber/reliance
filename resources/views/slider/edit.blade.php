@extends('admin.master')

@section('title')
    Edit Slider
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>Edit Slider</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('update_slider') !!}" method="post" name="edit_form" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Slider Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        
                         <textarea  id="text-input" name="title" placeholder="Enter Title" class="form-control">{!! $sliderById->title !!}</textarea>
                        <input type="hidden" value="{!! $sliderById->id !!}" class="form-control" name="id">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Slider Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="description" class="form-control">{!! $sliderById->description !!}</textarea>
                        <span class="text-danger">{!! $errors->has('description')? $errors->first('description'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Slider Image Upload</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" value="{!! $sliderById->slider_img !!}" id="file-input" name="slider_img" class="form-control-file">
                        <video autoplay muted loop id="myVideo" style="height: 100px; width: 160px;">
                                    <source src="images/{!! $sliderById->slider_img !!}" type="video/mp4" src="images/{!! $sliderById->slider_img !!}" />
                                </video>
                       
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="status" id="select" class="form-control">
                            <option @if($sliderById->status==0) selected @endif value="0">Unpublished</option>
                            <option @if($sliderById->status==1) selected @endif value="1">Published</option>
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
    <script>
        document.forms['edit_form'].elements['status'].value={!! $sliderById->status !!}
    </script>
@endsection
