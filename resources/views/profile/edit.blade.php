@extends('admin.master')

@section('owner_name')
    Edit Feature
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    @if($owner_information)
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>Edit Profile</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('owner-profile') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="owner_name" class=" form-control-label">Owner Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        
                        <input type="hidden" value="{!! $owner_information->id !!}"  name="id">
                        <textarea id="owner_name" name="owner_name" placeholder="Enter owner name" class="form-control textarea" required>{!! $owner_information->owner_name !!}</textarea>
                        <span class="text-danger">{!! $errors->has('owner_name')? $errors->first('owner_name'):'' !!}</span>
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="title" class=" form-control-label">Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                       
                        <textarea id="title" name="title" placeholder="Enter title" class="form-control textarea" required>{!! $owner_information->title !!}</textarea>
                        <span class="text-danger">{!! $errors->has('title')? $errors->first('title'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label"> Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea class="form-control textarea" name="description">{!! $owner_information->description !!}</textarea>
                        <span class="text-danger">{!! $errors->has('description')? $errors->first('description'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="feature_img" class=" form-control-label">Image</label>
                    </div>
                    <div class="col-12 col-md-3">
                        <input type="file" value="" id="feature_img" name="image">
                        <span class="text-danger">{!! $errors->has('image')? $errors->first('image'):'' !!}</span>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="/images/{!! $owner_information->image !!}" id="profile-img-tag" style="height: 250px;">
                    </div>
                </div>

               
                

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="status" value="{!! $owner_information->status !!}" id="select" class="form-control">
                            <option @if($owner_information->status==0) selected @endif value="0">Unpublished</option>
                            <option @if($owner_information->status==1) selected @endif value="1">Published</option>
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
    @endif
    
@endsection
