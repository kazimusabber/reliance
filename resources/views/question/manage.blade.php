@extends('admin.master')

@section('title')
   Manage Question
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Manage Question</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-info" href="{!! url('/question-create') !!}">New Question</a>
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
                            <th>SL</th>
                            <th>Set</th>
                            <th>Question</th>
                            <th>Option</th>
                            <th>Correct Answer</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach($infos as $in_key=>$info)
                            <tr>
                                <td>{!! $in_key+1  !!}</td>
                                <td>{!! $info->set_id ?? ''  !!}</td>
                                <td>{!! $info->question ?? '' !!}</td>
                                <td>
                                    <table>
                                        @if($info->question_options)
                                        @forelse($info->question_options as $options)
                                        <tr>
                                            <td style="width: 10%">{!!  $options->que_serial ?? ''  !!}</td>
                                            <td style="width: 90%">{!!  $options->que_option ?? ''  !!}</td>
                                        </tr>
                                        @empty
                                        @endforelse
                                        @endif
                                    </table>
                                </td>
                                <td>{!! $info->ques_ans ?? '' !!}</td>
                                <td>{!! $info->status==1 ? 'Published':'Unpublished' !!}</td>
                                <td>
                                    <a href="{!! url('/edit_question/'.$info->id) !!}" class="btn btn-success">
                                        <span class="fa fa-edit"></span>
                                    </a>

                                    <a href="{!! url('/delete_question/'.$info->id) !!}" onclick="return confirm('Are you confirm to Delete?');" class="btn btn-danger">
                                        <span class="fa fa-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>SL</th>
                            <th>Set</th>
                            <th>Question</th>
                            <th>Option</th>
                            <th>Correct Answer</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
