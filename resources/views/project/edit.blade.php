@extends('admin.master')

@section('title')
    Edit Project
@endsection

@section('body')

    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>Edit Project</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('update_project') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Project Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! $projectById->project_name !!}" id="text-input" name="project_name" placeholder="Enter Project Name" class="form-control">
                        <input type="hidden" value="{!! $projectById->id !!}" id="text-input" name="id">

                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Project Type</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="project_setup_id" id="select" class="form-control" required>
                            <option>Select</option>
                            @foreach($projectSetups as $projectSetup)
                                <option
                                    value="{!! $projectSetup->id !!}" @if($projectById->project_setup_id == $projectSetup->id) selected @endif>{!! $projectSetup->project_type !!}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Project Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea id="textarea-input" value="{!! $projectById->description !!}" name="description" rows="9" placeholder="Content..." class="form-control" required></textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" value="{!! $projectById->project_img !!}" class="form-control-label">Project Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="project_img" class="form-control-file">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select  name="service_status" id="select" class="form-control">
                            <option @if($projectById->service_status==0) selected @endif value="0">Unpublished</option>
                            <option @if($projectById->service_status==1) selected @endif value="1">Published</option>
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
        document.forms['edit_form'].elements['status'].value={!! $projectById->status !!}
    </script>
@endsection
