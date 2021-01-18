@extends('admin.master')

@section('title')
    Edit Logo
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>Edit Setting</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('update_logo') !!}" method="post" name="edit_form" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Sliding Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $logoById->title !!}" id="text-input" name="title" placeholder="Enter Title" class="form-control">
                        <input type="hidden" value="{!! $logoById->id !!}" class="form-control" name="id">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Logo Upload</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" value="{!! $logoById->logo_img !!}" id="file-input" name="logo_img" class="form-control-file">
                        <img src="/images/{!! $logoById->logo_img !!}" style="height: 50px;">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-phone" class=" form-control-label">Phone</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $logoById->phone !!}" id="file-phone" name="phone" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-email" class=" form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $logoById->email !!}" id="file-email" name="email" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-mobile" class=" form-control-label">Mobile</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $logoById->mobile !!}" id="file-mobile" name="mobile" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-Website" class=" form-control-label">Website</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $logoById->website !!}" id="file-Website" name="website" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="default_color" class=" form-control-label">Default Color</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="color" value="{!! $logoById->default_color !!}" id="default_colorr" name="default_color" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Map Url</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $logoById->map_url ?? ''  !!}" id="file-input" name="map_url" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="description" class="form-control">{!! $logoById->description !!}</textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Address</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="address" class="form-control">{!! $logoById->address !!}</textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">SSL script</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="ssl_script" class="form-control">{!! $logoById->ssl_script ?? '' !!}</textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-store_id" class=" form-control-label">Store Id</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $logoById->store_id !!}" id="file-store_id" name="store_id" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-store_password" class=" form-control-label">Store Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $logoById->store_password ?? '' !!}" id="file-store_password" name="store_password" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="under_constraction" class=" form-control-label">Under Constraction</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="under_constraction" id="under_constraction" class="form-control">
                            <option @if($logoById->under_constraction ==0) selected @endif value="0">Yes</option>
                            <option @if($logoById->under_constraction ==1) selected @endif value="1">No</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="under_constraction_text" class=" form-control-label">Under Constraction Text</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="under_constraction_text" class="form-control textarea">{!! $logoById->under_constraction_text ?? '' !!}</textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="status" id="select" class="form-control">
                            <option @if($logoById->status ==0) selected @endif value="0">Inactive</option>
                            <option @if($logoById->status ==1) selected @endif value="1">Active</option>
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
        document.forms['edit_form'].elements['status'].value={!! $logoById->status !!}
    </script>
@endsection
