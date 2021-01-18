@extends('admin.master')

@section('title')
    Manage Menu
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Manage Menu</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-info" href="{!! url('/add_menu') !!}">New Menu</a>
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
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Main Menu</th>
                            <th>Sub Menu</th>
                            <th>URL</th>
                            <th>Serial</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach($infos as $info)
                            <tr>
                                 <td>{!! $info->id ?? ''  !!}</td>
                                <td>{!! $info->main_menu ?? ''  !!}</td>
                                <td>{!! $info->submenu->main_menu ?? '' !!}</td>
                                <td>{!! $info->menu_url ?? '' !!}</td>
                                <td>{!! $info->serial ?? '' !!}</td>
                                <td>{!! $info->status==1 ? 'Published':'Unpublished' !!}</td>
                                <td>
                                    <a href="{!! url('/edit_menu/'.$info->id) !!}" class="btn btn-success">
                                        <span class="fa fa-edit"></span>
                                    </a>

                                    <a href="{!! url('/delete_menu/'.$info->id) !!}" onclick="return confirm('Are you confirm to Delete?');" class="btn btn-danger">
                                        <span class="fa fa-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
