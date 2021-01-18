@extends('admin.master')

@section('title')
    ADD Program
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Add Program</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-info" href="{!! url('/manage_courses') !!}">Manage Program</a>
                    </div>
                </div>
                 @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!!  \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
            </div>
        <div class="card-body card-block">
            <form action="{!! url('save_courses') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Center Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select class="form-control" name="center_id" required>
                            <option value="">Select Center</option>
                            @forelse($centers as $center)
                            <option value="{!! $center->id !!}">{!! $center->name ?? ''  !!}</option>
                            @empty
                            @endforelse
                        </select>
                        <span class="text-danger">{!! $errors->has('name')? $errors->first('name'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Course Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" placeholder="Enter name" class="form-control" required>
                        <span class="text-danger">{!! $errors->has('name')? $errors->first('name'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-image" class=" form-control-label">Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="text-image" name="image" placeholder="Enter image" class="form-control" required>
                        <span class="text-danger">{!! $errors->has('image')? $errors->first('image'):'' !!}</span>
                        <br>
                        <img src="" id="course_image" style="height: 150px;width: 150px;">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Short Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        
                        <textarea name="short_description" class="form-control textarea" placeholder="short_description"></textarea>
                        <span class="text-danger">{!! $errors->has('short_description')? $errors->first('short_description'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Details</label>
                    </div>
                    <div class="col-12 col-md-9">
                        
                        <textarea name="details" class="form-control textarea" placeholder="Details"></textarea>
                        <span class="text-danger">{!! $errors->has('details')? $errors->first('details'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">start Date</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="date" name="start_date" class="form-control" placeholder="start_date">
                        <span class="text-danger">{!! $errors->has('start_date')? $errors->first('start_date'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">End Date</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="date" name="end_date" class="form-control" placeholder="end_date">
                        <span class="text-danger">{!! $errors->has('end_date')? $errors->first('end_date'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Fee</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" name="fee" class="form-control" placeholder="fee">
                        <span class="text-danger">{!! $errors->has('fee')? $errors->first('fee'):'' !!}</span>
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
                        <i class="fa fa-dot-circle-o"></i>Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i>Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
