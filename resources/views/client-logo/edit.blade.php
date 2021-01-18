@extends('admin.master')

@section('title')
    Edit Client 
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>Edit Client</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('update_client-logo') !!}" method="post" name="edit_form" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $client_logoById->title !!}" id="text-input" name="title" placeholder="Enter Title" class="form-control">
                        <input type="hidden" value="{!! $client_logoById->id !!}" class="form-control" name="id">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $client_logoById->client_name !!}" id="text-input" name="client_name" placeholder="Enter client name" class="form-control">
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Designation</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $client_logoById->designation !!}" id="text-input" name="designation" placeholder="Enter Designation" class="form-control">
                        
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Details</label>
                    </div>
                    <div class="col-12 col-md-9">
                       
                        <textarea name="details" placeholder="Enter details" class="form-control" required>{!! $client_logoById->details !!}</textarea>
                        <span class="text-danger">{!! $errors->has('details')? $errors->first('details'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" value="{!! $client_logoById->client_logo_img !!}" id="file-input" name="client_logo_img" class="form-control-file">
                        <img src="/images/{!! $client_logoById->client_logo_img !!}" height="200px" width="300px">
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
        document.forms['edit_form'].elements['status'].value="{!! $client_logoById->status !!}"
    </script>
@endsection
