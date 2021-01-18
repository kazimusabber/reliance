@extends('admin.master')

@section('title')
    Manage Contact
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Contacts</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>Office Title</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Location/Address</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Office Title</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Location/Address</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{!! $contact->getName->office_title !!}</td>
                                <td>{!! $contact->email !!}</td>
                                <td>{!! $contact->phone !!}</td>
                                <td>{!! $contact->location !!}</td>
                              <!--  <td>{!! $contact->status==1 ? 'Published':'Unpublished' !!}</td> -->
                                <td>
                                    <a href="{!! url('/edit_contact/'.$contact->id) !!}" class="btn btn-success">
                                        <span class="fa fa-edit"></span>
                                    </a>

                                    <a href="{!! url('/delete_contact/'.$contact->id) !!}" onclick="return confirm('Are you confirm to Delete?');" class="btn btn-danger">
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
