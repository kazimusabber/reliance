@extends('admin.master')

@section('title')
    Manage Achievement Setup
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Achievement Setup</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>Achievement Type</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Achievement Type</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($achievementSetups as $achievementSetup)
                            <tr>
                                <td>{!! $achievementSetup->achievement_type !!}</td>
                                <td>{!! $achievementSetup->status==1 ? 'Published':'Unpublished' !!}</td>
                                <td>
                                    <a href="{!! url('/edit_achievement_setup/'.$achievementSetup->id) !!}" class="btn btn-success">
                                        <span class="fa fa-edit"></span>
                                    </a>

                                    <a href="{!! url('/delete_achievement_setup/'.$achievementSetup->id) !!}" onclick="return confirm('Are you confirm to Delete?');" class="btn btn-danger">
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
