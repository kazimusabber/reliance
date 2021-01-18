@extends('admin.master')

@section('owner_name')
    User Profile Edit
@endsection

@section('body')
    <h3 class="text-center text-success">
        @if (\Session::has('success'))
            {{  \Session::get('success') }}     
        @endif</h3>
  
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    @if($user)
                    <strong>Edit Profile</strong>
                    @else
                    <strong>New User</strong>
                    @endif
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-info" href="{{url('user-list')}}">User List</a>
                </div>
            </div>
        </div>
        <div class="card-body card-block">
            <form action="{!! url('user-update') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="name" class=" form-control-label">Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{!! old('name',$user->name ?? '') !!}" id="name" name="name" placeholder="Enter User name" class="form-control" required>
                        <input type="hidden" value="{!! old('id',$user->id ?? '') !!}"  name="id">
                        <span class="text-danger">{!! $errors->has('name')? $errors->first('name'):'' !!}</span>
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email " class=" form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" value="{!! old('email',$user->email ?? '')  !!}" id="email " name="email" placeholder="email" class="form-control" required>
                        <span class="text-danger">{!! $errors->has('email')? $errors->first('email'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label"> User Type</label>
                    </div>
                    <div class="col-12 col-md-9">
                        @php
                        $user_types = ['admin','center','student'];
                        @endphp
                        <select class="form-control" name="user_type" @if($user->user_type ?? '' !=='admin') required @endif>
                            <option value="">Chose One</option>
                        @foreach($user_types as $type)
                        <option @if($user->user_type) @if($user->user_type==$type) selected @endif  @endif  value="{{$type}}">{{$type}}</option>
                           
                        @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Center</label>
                    </div>
                    <div class="col-12 col-md-9">
                        
                        <select class="form-control" name="center_id" @if($user->user_type ?? '' !=='admin') required @endif>
                            <option value="">Chose One</option>
                            @foreach($centers as $center)
                            @if(old('center_id',$user->center_id ) == $center->id )
                                <option value="{{$center->id}}" selected >{{$center->name ?? '' }}</option>
                            @else
                                 <option value="{{$center->id}}"  >{{$center->name ?? '' }}</option>
                            @endif

                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="status" value="{!! $user->status ?? '' !!}" id="select" class="form-control">
                            <option @if($user->status ?? '' ==0) selected @endif value="0">Unpublished</option>
                            <option @if($user->status ?? '' ==1) selected @endif value="1">Published</option>
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
