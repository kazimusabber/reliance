@extends('admin.master')

@section('title')
    Edit Question
@endsection

@section('body')
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!!  \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
    <div class="card col-lg-12" style="width: 90%; margin-left: 44px;">
        <div class="card-header">
            <strong> Edit Question</strong>
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
                                 <option @if($info->set_id==$set_k) selected @endif value="{!! $set_k !!}">{!! $set !!}</option>
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
                        <input type="hidden" name="id" value="{!! $info->id !!}">
                        <textarea class="form-control" name="question" required>{!!  $info->question ?? ''  !!}</textarea>
                        <span class="text-danger">{!! $errors->has('question')? $errors->first('question'):'' !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Question Options</label>
                    </div>
                    <div class="col-12 col-md-9">
                        @php
                            $options_number=['A','B','C','D'];
                            $options_data= $info->question_options ?? [];
                          
                        @endphp
                        @foreach($options_data as $onk=>$opnum)
                        <div class="row">
                            <div class="col-md-1">
                                @if($onk ==0)
                                <label for="text-input" class=" form-control-label">Serial</label>
                                @endif
                                <input class="form-control" type="text" name="que_serial[]" readonly value="{!! $opnum->que_serial ?? '' !!}">
                            </div>
                            <div class="col-md-11">
                                @if($onk ==0)
                                <label for="text-input" class=" form-control-label">Options</label>
                                @endif
                                <input type="hidden" name="option_id[]" value="{!! $opnum->id ?? '' !!}" >
                                 <textarea class="form-control" name="que_option[]" required>{!! $opnum->que_option ?? '' !!}</textarea>
                            </div>
                        </div>
                        <br>
                        @endforeach
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Correct Answer</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="ques_ans" id="select" class="form-control">
                            @foreach($options_number as $onk=>$opnum)
                            <option @if($info->ques_ans == $opnum) selected @endif value="{!! $opnum !!}">{!! $opnum !!}</option>
                            @endforeach

                        </select>
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
@endsection
