@extends('admin.master')

@section('title')
     Contact List
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
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Location/Address</th>
                            <th>Message</th>
                            <th>Attachment</th>
                        </tr>
                        </thead>
                      
                        <tbody>
                        @foreach($messageList as $contact)
                            
                            <tr>
                                <td>{!! $contact->con_name ?? null  !!}</td>
                                <td>{!! $contact->email_address ?? null  !!}</td>
                                <td>{!! $contact->phone_no ?? null  !!}</td>
                                <td>{!! $contact->country ?? null  !!}</td>
                                <td>{!! $contact->message ?? null  !!}</td>
                                <td>
                                    @if($contact->_file != null)
                                    <a href="{{ url('downlaodfile').'/'.$contact->id }}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a>
                                    @endif
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
