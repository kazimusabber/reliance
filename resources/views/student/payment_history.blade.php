@extends('admin.master')

@section('title')
   Payment History
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Payment History</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                            
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Center</th>
                            <th>course</th>
                            <th>Transection</th>
                            <th>Amount</th>
                            <th>Time</th>
                        </tr>
                        </thead>
                       
                        <tbody>
                        @foreach($payments as $value)
                            <tr>
                                <td>{!! $value->name ?? '' !!}</td>
                                <td>{!! $value->email ?? '' !!}</td>
                                <td>{!! $value->phone ?? '' !!}</td>
                                <td>{!! $value->center->name ?? '' !!}</td>
                                <td>{!! $value->course->name ?? '' !!}</td>
                                <td>{!! $value->transaction_id ?? '' !!}</td>
                                <td>{!! $value->amount ?? '' !!}</td>
                                <td>{!! $value->created_at ?? '' !!}</td>
                                
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
