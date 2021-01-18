@extends('admin.master')
@section('title')
    Edit Achievement
@endsection


@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>Edit Achievement</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('update_achievement') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Select Achievement</label>
                    </div>

                    <div class="col-12 col-md-9">
                        <select name="achievement_setup_id" id="select" class="form-control" required>
                            <option>Select</option>
                            @foreach($achievementSetups as $achievementSetup)
                                <option
                                    value="{!! $achievementSetup->id !!}" @if($achievementById->achievement_setup_id == $achievementSetup->id) selected @endif>{!! $achievementSetup->achievement_type !!}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Achievement Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" value="{!! $achievementById->description !!}" name="description" placeholder="Enter Job Title" class="form-control">
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
@endsection
