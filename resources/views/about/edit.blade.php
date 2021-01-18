@extends('admin.master')

@section('title')
    Edit Topics
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>ADD Topics</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('update_about') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">About Topics</label>                   </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" value="{!! $aboutById->topics !!}" name="topics" placeholder="Enter Topics" class="form-control" required>
                        <input type="hidden" id="text-input" value="{!! $aboutById->id !!}" name="id">
                        <span class="text-danger">{!! $errors->has('topics')? $errors->first('topics'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Topics Description</label>                   </div>
                    <div class="col-12 col-md-9">
                       <!--  <input type="text" id="text-input" value="{!! $aboutById->description !!}" name="description" placeholder="Enter Description" class="form-control" required> -->
                       <textarea class="form-control textarea" name="description">{!! $aboutById->description !!}</textarea>
                        <span class="text-danger">{!! $errors->has('description')? $errors->first('description'):'' !!}</span>
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
                        <i class="fa fa-dot-circle-o"></i>Update
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.forms['edit_form'].elements['status'].value={!! $aboutById->status !!}
    </script>
@endsection
