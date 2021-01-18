@extends('admin.master')

@section('title')
   Due Payment
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Due Payment</h6>
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
                            <th>Course Fee</th>
                            <th>Receive Amount</th>
                            <th>Due Amount</th>
                        </tr>
                        </thead>
                       
                        <tbody>
                        @foreach($info as $key=>$value)
                            <tr>
                                <td>{!! $value->first_name ?? '' !!}  {!! $value->last_name ?? '' !!}</td>
                                <td>{!! $value->email ?? '' !!}</td>
                                <td>{!! $value->mobile ?? '' !!}</td>
                                <td>{!! $value->center->name ?? '' !!}</td>
                                <td>{!! $value->course->name ?? '' !!}</td>
                                <td>{!! $value->course->fee ?? '' !!}</td>
                                <td>
                                    <div class="panel-group">
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" href="#collapse{{$key}}">
                                                  @php
                                                    $totalAmount = 0;
                                                  @endphp
                                                 
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapse{{$key}}" class="panel-collapse collapse">
                                           <?php
                                            if($value->payment){
                                                 $payment_details = $value->payment ?? [];
                                            }else{
                                               $payment_details = []; 
                                            }
                                           
                                        ?>
                                            
                                            
                                                <table class="table border-collapse">
                                                    @if($payment_details)
                                                        @forelse($payment_details as $dekey=>$detail)
                                                                @if($dekey ==0)
                                                                <tr>
                                                                    <td>Date</td>
                                                                    <td>Amount</td>
                                                                </tr>
                                                                @endif
                                                                @php
                                                                    $totalAmount +=$detail->amount;
                                                                 @endphp
                                                                <tr>
                                                                    <td>
                                                                        @php
                                                                            $date=date_create($detail->created_at);
                                                                            $date= date_format($date,"Y/m/d");
                                                                        @endphp
                                                                        {!! $date ?? '' !!}</td>
                                                                    <td>{!! $detail->amount ?? '' !!}</td>
                                                                    
                                                                    
                                                                </tr>
                                                         @empty

                                                         @endforelse
                                                           @endif
                                                </table>
                                           
                                          </div>
                                        </div>
                                      </div>
                                     <a data-toggle="collapse" href="#collapse{{$key}}"> 
                                        <strong>{{ $totalAmount }}</strong>
                                     </a>
                                </td>
                                <td>{!! $value->course->fee - $totalAmount !!}</td>
                                
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
