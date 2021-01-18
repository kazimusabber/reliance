@extends('admin.master')

@section('title')
   Student Result
@endsection

@section('body')
<style type="text/css">
    .result_wrong{
  color: red;
  font-weight: bold;
}
.result_right{
  color: green;
  font-weight: bold;
}
</style>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Student Result</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                            
                        <tr>
                            <th>Name</th>
                            <th>Question Set</th>
                            <th>Marks %</th>
                            <th>Details</th>
                        </tr>
                        </thead>
                       
                        <tbody>
                        @forelse($info as $key=>$value)
                            <tr>
                                <td>{!! $value->student->first_name ?? '' !!} {!! $value->student->last_name ?? '' !!}</td>
                                <td>{!! $value->set_id ?? '' !!} </td>
                                <td>{!! $value->result_percentage ?? 0 !!} %</td>
                                <td>
                                    <div class="panel-group">
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" href="#collapse{{$key}}">Result Details</a>
                                            </h4>
                                          </div>
                                          <div id="collapse{{$key}}" class="panel-collapse collapse">
                                           <?php
                                            if($value->result_sheet){
                                                 $result_details = json_decode($value->result_sheet);
                                            }else{
                                               $result_details = []; 
                                            }
                                           
                                        ?>
                                            
                                            
                                                <table class="table border-collapse">
                                        @if($result_details)
                                            @forelse($result_details as $dekey=>$detail)
                                                    @if($dekey ==0)
                                                    <tr>
                                                        <td>Question id</td>
                                                        <td>Set Name</td>
                                                        <td>Answer</td>
                                                        <td>Result</td>
                                                    </tr>
                                                    @endif
                                                    <tr>
                                                        <td>{{$detail->id ?? '' }}</td>
                                                        <td>{{$detail->set_id ?? '' }}</td>
                                                        <td>{{$detail->ans ?? '' }}</td>
                                                        <td><span class="result_{{trim($detail->result ?? '') }}">
                                                            {{$detail->result ?? '' }}
                                                        </span></td>
                                                        
                                                    </tr>
                                             @empty

                                             @endforelse
                                               @endif
                                                </table>
                                           
                                          </div>
                                        </div>
                                      </div>
                                </td>
                                
                            </tr>
                        @empty
                        <tr>
                            <td colspan="4">No Data Found</td>
                        </tr>
                        @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
