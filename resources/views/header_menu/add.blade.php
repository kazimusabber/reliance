@extends('admin.master')

@section('title')
Add Menu
@endsection

@section('body')
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        
           <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Add Menu</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-info" href="{!! url('/menu') !!}">Menu List</a>
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
            <form action="{!! url('save_menu') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                  @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Menu Category</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select class="form-control" name="parent_id">
                            <option value="0">Parent Menu</option>
                            @forelse($menus as $menu)
                            <option value="{{$menu->id ?? 0}}">{!! $menu->main_menu !!}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="Menu-input" class=" form-control-label">Menu </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="Menu-input" name="main_menu" placeholder="Enter Menu" class="form-control">
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="menu_url" class=" form-control-label">Menu Url </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="menu_url" name="menu_url" placeholder="Enter Menu URL" class="form-control">
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="serial" class=" form-control-label">Serial </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="serial" name="serial" placeholder="Enter " class="form-control">
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="sta-input" class=" form-control-label">Menu </label>
                    </div>
                    <div class="col-12 col-md-9">
                       <select name="status" id="select" class="form-control">
                            <option  value="0">Inactive</option>
                            <option value="1">Active</option>
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
