@extends('admin.master')
@section('title')
    Edit Posts
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
           
            <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary"><strong> Update Post</strong></h6>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-info" href="{!! url('/manage_post') !!}">Post List</a>
                </div>
            </div>
        </div>
        <div class="card-body card-block">
            <form action="/update_post/{!! $postById->id !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Post Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" value="{!! $postById->title !!}" name="title" placeholder="Enter Post Title" class="form-control">


                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Post Type</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" value="{!! $postById->post_type !!}" name="post_type" placeholder="Post Type" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="description" id="textarea-input" rows="9" placeholder="Content..."
                                  class="form-control">
                                      {!! $postById->description ?? '' !!}
                                  </textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Image Upload</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="post_img" value="{!! $postById->post_img !!}" class="form-control-file">
                    </div>
                    
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="/images/{!! $postById->post_img ?? '' !!}" id="profile-img-tag" style="height: 250px;">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="status" id="select" value="{!! $postById->status !!}" class="form-control">
                            <option @if($postById->status ?? '' ==0) selected @endif value="0">Unpublished</option>
                            <option @if($postById->status ?? '' ==1) selected @endif value="1">Published</option>
                        </select>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
