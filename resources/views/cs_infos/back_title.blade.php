@extends('admin.master')
@section('title')
   Change Image
@endsection


@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>  Change Image</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('update_bt') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $b_t->title ?? '' !!}" id="text-input" name="title" placeholder="Enter Technology Name...." class="form-control">
                        <input type="hidden" value="{!! $b_t->id ?? '' !!}" id="text-input" name="id">
                        <span class="text-danger">{!! $errors->has('title')? $errors->first('title'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" name="image" class="form-control">
                        <img src="/images/{!! $b_t->image ?? '' !!}" alt="{!! $b_t->title ?? '' !!}" height="250">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Become Instractor Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $b_t->instractor_title ?? '' !!}" id="text-input" name="instractor_title" placeholder="Title" class="form-control">
                        
                        <span class="text-danger">{!! $errors->has('instractor_title')? $errors->first('instractor_title'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Become Instractor Details</label>
                    </div>
                    <div class="col-12 col-md-9">
                        
                        <textarea name="instractor_details" placeholder="Title" class="form-control">{!! $b_t->instractor_details ?? '' !!}</textarea>
                        
                        <span class="text-danger">{!! $errors->has('instractor_details')? $errors->first('instractor_details'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Special Text</label>
                    </div>
                    <div class="col-12 col-md-9">
                        
                        <textarea name="special_text" placeholder="Title" class="form-control">{!! $b_t->special_text ?? '' !!}</textarea>
                        
                        <span class="text-danger">{!! $errors->has('special_text')? $errors->first('special_text'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Become Instractor Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" name="instractor_image" class="form-control">
                        <img src="/images/{!! $b_t->instractor_image ?? '' !!}" alt="{!! $b_t->instractor_title ?? '' !!}" height="250">
                    </div>
                </div>
                

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="status"  id="select" class="form-control">
                            <option @if($b_t->status ?? 0 ==0)selected @endif value="0" >Unpublished</option>
                            <option @if($b_t->status ?? 0==1 ) selected @endif value="1">Published</option>
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
