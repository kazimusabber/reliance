@extends('admin.master')

@section('title')
    Add Center
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>ADD Center</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('save_center') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Center Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" placeholder="Enter name" class="form-control" required>
                        <span class="text-danger">{!! $errors->has('name')? $errors->first('name'):'' !!}</span>
                    </div>
                </div>

                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Mobile</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="mobile" class="form-control" placeholder="Mobile">
                        <span class="text-danger">{!! $errors->has('mobile')? $errors->first('mobile'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Center  Address</label>
                    </div>
                    <div class="col-12 col-md-9">
                       
                        <textarea name="address" class="form-control" placeholder="Address"></textarea>
                        <span class="text-danger">{!! $errors->has('address')? $errors->first('address'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Mail</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" name="sender_mail" class="form-control" placeholder="Email">
                        <span class="text-danger">{!! $errors->has('sender_mail')? $errors->first('sender_mail'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Mail Subject</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="mail_subject" class="form-control" placeholder="Mail Subject">
                        <span class="text-danger">{!! $errors->has('mail_subject')? $errors->first('mail_subject'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Mail Body Content</label>
                    </div>
                    <div class="col-12 col-md-9">
                        
                        <textarea name="mail_content" class="form-control" placeholder="Mail Body Content"></textarea>
                        <span class="text-danger">{!! $errors->has('mail_content')? $errors->first('mail_content'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Emam Mail Body Content</label>
                    </div>
                    <div class="col-12 col-md-9">
                        
                        <textarea name="exam_mail_body" class="form-control" placeholder="Exam Mail Body Content"></textarea>
                        <span class="text-danger">{!! $errors->has('exam_mail_body')? $errors->first('exam_mail_body'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Mail Footer Content</label>
                    </div>
                    <div class="col-12 col-md-9">
                        
                        <textarea name="mail_footer" class="form-control" placeholder="Mail Footer Content"></textarea>
                        <span class="text-danger">{!! $errors->has('mail_footer')? $errors->first('mail_footer'):'' !!}</span>
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
