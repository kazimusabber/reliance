@extends('admin.master')
@section('title')
    Add Project
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>ADD Project</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('project-feature-save') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
               

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Project Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="project_id" id="select" class="form-control" required>
                            <option>Select</option>
                            @foreach($projectSetups as $projectSetup)
                                <option
                                    value="{!! $projectSetup->id !!}">{!! $projectSetup->project_name !!}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Project Feature</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="file-input" name="feature" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Serial</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="file-input" name="serial" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="status" id="select" class="form-control">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
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