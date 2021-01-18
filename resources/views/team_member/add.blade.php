@extends('admin.master')
@section('title')
    Add Team
    @endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>ADD New Team Member</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('save_member') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Member Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" value="" placeholder="Enter Member Name" class="form-control">
                        <span class="text-danger">{!! $errors->has('name')? $errors->first('name'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Designation</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="designation" placeholder="Enter Designation " class="form-control">
                        <span class="text-danger">{!! $errors->has('designation')? $errors->first('designation'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Age</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="age" placeholder="Member Age" class="form-control">
                        <span class="text-danger">{!! $errors->has('age')? $errors->first('age'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Salary</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="salary" placeholder="Enter Salary" class="form-control">
                        <span class="text-danger">{!! $errors->has('salary')? $errors->first('salary'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Joining Date</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="join_date" placeholder="Joining Date" class="form-control">
                        <span class="text-danger">{!! $errors->has('join_date')? $errors->first('join_date'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Expert ON</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="experts" id="select" class="form-control">
                            <option value="0">Please select</option>
                            <option value="1">Java</option>
                            <option value="2">Python</option>
                            <option value="3">Scala</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Quotation</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="quotation" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                        <span class="text-danger">{!! $errors->has('quotation')? $errors->first('quotation'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Image Upload</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="member_img" class="form-control-file">
                        <span class="text-danger">{!! $errors->has('member_img')? $errors->first('member_img'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Service Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="" id="select" class="form-control">
                            <option value="0">In Service</option>
                            <option value="1">Out Of Service</option>
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
