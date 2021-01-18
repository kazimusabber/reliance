@extends('admin.master')

@section('title')
    Add Question
@endsection

@section('body')
       
<div class="container-fluid">
    <div class="card shadow mb-4">
            <div class="card-header py-3">
            
                    <div class="row">
                            <div class="col-md-6">
                                <h6 class="m-0 font-weight-bold text-primary"><strong> Add Question</strong></h6>
                            </div>
                            <div class="col-md-6 text-right">
                                <a class="btn btn-info" href="{!! url('/question') !!}">Question List</a>
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
            <form action="{!! url('question') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Question Set</label>
                    </div>
                    @php
                    $sets = ['A'=>'A','B'=>'B','C'=>'C','D'=>'D','E'=>'E','F'=>'F','G'=>'G','H'=>'H','I'=>'I'];
                    @endphp
                    <div class="col-12 col-md-9">
                        <select name="set_id" class="form-control">
                            <option value=""> Select Set</option>
                            @foreach($sets as $set_k=>$set)
                                 <option value="{!! $set_k !!}">{!! $set !!}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">{!! $errors->has('set_id')? $errors->first('set_id'):'' !!}</span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Question</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea class="form-control" name="question" required></textarea>
                        <span class="text-danger">{!! $errors->has('question')? $errors->first('question'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Number Of Option</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select class="form-control number_of_option" name="number_of_option">
                            @for($i=1;$i<=10; $i++)
                            <option value="{!! $i !!}">{!! $i !!}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Question Options</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="option_section">
                            @php
                                $options_number=['A','B','C','D'];
                            @endphp
                            @foreach($options_number as $onk=>$opnum)
                         <!--    <div class="row">
                                <div class="col-md-1">
                                    @if($onk ==0)
                                    <label for="text-input" class=" form-control-label">Serial</label>
                                    @endif
                                    <input class="form-control" type="text" name="que_serial[]" readonly value="{!! $opnum !!}">
                                </div>
                                <div class="col-md-11">
                                    @if($onk ==0)
                                    <label for="text-input" class=" form-control-label">Options</label>
                                    @endif
                                     <textarea class="form-control" name="que_option[]" required></textarea>
                                </div>
                            </div> -->
                            <br>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Correct Answer</label>
                    </div>
                    <div class="col-12 col-md-9">
                        
                             <div class="option_number_answer">
                        
                        
                        </div>
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
</div>
@endsection


