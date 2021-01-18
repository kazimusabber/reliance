@extends('admin.master')

@section('title')
    Manage Ceneter
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manage Ceneter</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>Action</th>
                            <th>ID</th>
                            <th>Center Name</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Mail Body</th>
                            <th>Exam Mail Body</th>
                            <th>Mail Footer</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                             <th>Action</th>
                            <th>ID</th>
                            <th>Center Name</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Mail Body</th>
                            <th>Exam Mail Body</th>
                            <th>Mail Footer</th>
                            <th>Status</th>
                           
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($infos as $info)
                            <tr>
                                 <td>
                                    <a href="{!! url('/edit_center/'.$info->id) !!}" class="btn btn-success">
                                        <span class="fa fa-edit"></span>
                                    </a>

                                    <a href="{!! url('/delete_center/'.$info->id) !!}" onclick="return confirm('Are you confirm to Delete?');" class="btn btn-danger">
                                        <span class="fa fa-trash"></span>
                                    </a>
                                </td>
                                <td>{!! $info->id ?? ''  !!}</td>
                                <td>{!! $info->name ?? ''  !!}</td>
                                <td>{!! $info->address ?? '' !!}</td>
                                <td>{!! $info->mobile ?? '' !!}</td>
                                <td>{!! $info->sender_mail ?? '' !!}</td>
                                <td>{!! $info->mail_content ?? '' !!}</td>
                                <td>{!! $info->exam_mail_body ?? '' !!}</td>
                                <td>{!! $info->mail_footer ?? '' !!}</td>
                                <td>{!! $info->status==1 ? 'Published':'Unpublished' !!}</td>
                               
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
