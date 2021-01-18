@extends('admin.master')

@section('title')
    Add Contact
@endsection

@section('body')
    <h3 class="text-center text-success">{!! Session::get('message') !!}</h3>
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong>ADD New Contact</strong>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('save_contact') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Address of Office</label>
                    </div>

                    <div class="col-12 col-md-9">
                        <select name="contact_setup_id" id="select" class="form-control">
                            <option>Select</option>
                            @foreach($contactSetups as $contactSetup)
                                <option
                                    value="{!! $contactSetup->id !!}">{!! $contactSetup->office_title !!}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Email ID</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="text-input" name="email" placeholder="Enter Email" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Phone No</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="phone" placeholder="Enter Phone NO." class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Location/Address</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="location" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
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
