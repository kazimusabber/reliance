@extends('admin.master')

@section('title')
    Edit Service
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>Edit Service</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('update_service') !!}" method="post" name="edit_form" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class="form-control-label">Content Type</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="contenttype" class="form-control">
                            <option value="1" @if($serviceById->contenttype == 1){{'selected'}}@endif>Service Content</option>
                            <option value="2" @if($serviceById->contenttype == 2){{'selected'}} @endif>Consultancy</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Service Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $serviceById->title !!}" id="text-input" name="title" placeholder="Enter Title" class="form-control">
                        <input type="hidden" value="{!! $serviceById->id !!}" class="form-control" name="id">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Service Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        
                        <textarea name="description" placeholder="Enter Description" class="form-control" required>{!! $serviceById->description !!}</textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Service Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" value="{!! $serviceById->service_img !!}" id="file-input" name="service_img" class="form-control-file">
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
                        <i class="fa fa-dot-circle-o"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.forms['edit_form'].elements['status'].value={!! $serviceById->status !!}
    </script>
@endsection
