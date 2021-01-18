@extends('frontend.layout.master')
@section('title', strip_tags($logo->title ?? ''))
@section('description', strip_tags($logo->description ?? ''))
@section('content')
@section('style')

@endsection
<div class="main-content">
  <div class="container">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 student_info_section">
            <div class="card-body card-block" >
                <div class="card_head">
                    <strong class="assessment_title">Assessment </strong>
                    <br>
                    <p><strong> You have to complete 20 MCQ answer in next 30 minutes (from you press START tab). Make sure your internet connection is stable and you are out of all kinds of obstacle to complete it successfully. Please click on START to begin your test. </strong></p>  

                     
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4" style="margin-bottom: 10px">
                            <button style="width: 100%;font-size: 20px;font-weight: bold;" class="btn btn-success start_button">Start</button> 
                            <!-- <button style="width: 100%;font-size: 20px;font-weight: bold;" class="btn btn-warning show_result_button">Show Result</button>
                            <button style="width: 100%;font-size: 20px;font-weight: bold;" class="btn btn-warning your_result"><strong>Your Result</strong></button> -->
                            <div class="remaining_time" style="display: none;">
                                <button style="width: 100%;" class="btn btn-danger">Remaining Time :-  <span class="runing_time" ></span></button>
                            </div>

                        </div>
                        
                        <div class="col-md-4">
                            <!-- <div class="remaining_time" style="display: none;">
                                <button style="width: 100%;" class="btn btn-danger">Remaining Time :-  <span class="runing_time" ></span></button>
                            </div> -->
                           
                        </div>
                    </div>
                     
                </div>
                <div class="card-body card-block ">
                    <div class="question_section_exam">
                        @forelse($questions as $key=>$question)
                        <div class="question_no_{{$key}}">
                        <p><strong>{!! $key+1 !!} : </strong>{!!  $question->question ?? '' !!}</p>
                        <table style="margin-top: -20px">
                            @foreach($question->question_options as $qu_key=>$ques_option)
                            <tr >
                                <td style="width: 50px;"></td>
                                <td>
                                    <input attr_qus="{!! $question->id !!}" attr_que_ser="{!! $ques_option->que_serial ?? '' !!}" class="ques_radio" type="radio" name="question_ans_{!! $question->id !!}" value="{!! $question->id !!}_{!! $ques_option->que_serial ?? '' !!}">
                                </td>
                                <td>
                                    <strong>{!! $ques_option->que_serial ?? '' !!} : </strong>
                                </td>
                                <td>
                                    {!!  trim($ques_option->que_option ?? '') !!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        </div>
                        @empty
                        @endforelse
                        <div style="text-align: center;margin-bottom: 50px;">
                            <button style="width: 50%;font-size: 20px;font-weight: bold;margin-bottom: 50px" class="btn btn-warning show_result_button">Show Result</button>
                        </div>
                    </div>
                    <div class="result_display">
                        <div class="row">
                             <div class="col-md-12">
                                 <p>If a student fails to get 70% answer correct, student need to forward to the Careers Hub for selected courses basic level admission. Will inform Students about his status and encourage him to get admission at Careers Hub. If he agrees then inform him that someone from Careers Hub will contact with him soon. Ask for suitable time if wants to.     </p>
                             </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <span class="result_compare"></span><span><strong class="result_percentage"></strong></span><br>
                                <div class="progress">
                                <div class="progress-bar" role="progressbar"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                                <table class="table table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            <th>Question No</th>
                                            <th>Your Answer</th>
                                            <th>Result</th>
                                        </tr>
                                    </thead>
                                    <tbody class="result_body">
                                        
                                    </tbody>
                            
                                </table>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-1"></div>
      </div>
  </div>
</div> 

@endsection
@section('script')
<script type="text/javascript">
      var count=0;
      var seconds=1000;
      var main_time = 100;
      var interVal;
      var total_question= `<?php echo count($questions); ?>`
      var right_answer=0;
      console.log(total_question)
      var result_sheet=[];
    $(document).on('click','.start_button',function(){
        $(document).find('.question_section_exam').show();
        $(document).find('.start_button').hide();
        $(document).find('.show_result_button').show();
        interVal = setInterval(myFunction, seconds)
    })

    function myFunction(){
        count +=1;
        if(count ==main_time){
            var result_html_page =  print_result(result_sheet);
            $(document).find('.result_body').html(result_html_page);
            alert('Your Time Is over');
        }
        var time= format(main_time-count)
        $(document).find('.remaining_time').show()
        $(document).find('.runing_time').text(time)
    }
    function format(time) {   
    var hrs = ~~(time / 3600);
    var mins = ~~((time % 3600) / 60);
    var secs = ~~time % 60;

    var ret = "";
    if (hrs > 0) {
        ret += "" + hrs + ":" + (mins < 10 ? "0" : "");
    }
    ret += "" + mins + ":" + (secs < 10 ? "0" : "");
    ret += "" + secs;
    return ret;
}

$(document).on('click','.ques_radio',function(){
    var question_id = $(this).attr('attr_qus')
    var que_ser = $(this).attr('attr_que_ser')
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var request = $.ajax({
          url: "{!! url('check-answer') !!}",
          type: "POST",
          data: {_token: CSRF_TOKEN, question_id:question_id,que_ser:que_ser},
        });
        request.done(function(msg) {
            var not_ok=[];
            if(result_sheet.length ==0){
                result_sheet.push({'id':question_id,'ans':que_ser,'result':msg})
            }else{
                for (var i = 0; i < result_sheet.length; i++) {
                  if(result_sheet[i].id ==question_id){
                    result_sheet[i]={'id':question_id,'ans':que_ser,'result':msg}
                    not_ok.push(1);
                  }
              }
              if(not_ok.length ==0){
                result_sheet.push({'id':question_id,'ans':que_ser,'result':msg})
              }
            }
          
          console.log(result_sheet)
        });

        request.fail(function(jqXHR, textStatus) {
          alert( "Request failed: " + textStatus );
        });

    console.log($(this).val())
})
$(document).on('click','.show_result_button',function(){
    var result_html_page =  print_result(result_sheet);
    $(document).find('.result_body').html(result_html_page);
    
})

function print_result(result_sheet){

    $(document).find('.question_section_exam').remove();
    $(document).find('.show_result_button').remove();
    $(document).find('.result_display').show();
    $(document).find('.your_result').show();
    clearInterval(interVal);

    result_sheet.sort(function(a, b){return a.id - b.id});
    var sheet_html = ``;
    if(result_sheet.length > 0){
        for (var i = 0; i < result_sheet.length; i++) {
            if(result_sheet[i].result=='right'){
                right_answer +=1;
            }
            sheet_html +=` <tr>
                <td style="text-align:center">${i+1}</td>
                <td style="text-align:center">${result_sheet[i].ans}</td>
                <td class="result_${result_sheet[i].result}" style="text-align:center">${result_sheet[i].result}</td>
            </tr>`
        }
    }else{
        sheet_html +=` <tr>
                <td colspan='3' style="text-align:center">No Result Found !</td>
            </tr>`
    }
    var wrong_answer_number = total_question-right_answer
    var style_percentage = right_answer/total_question*100
    var result_compare = right_answer+"/"+total_question
    $(document).find('.question_number').text(total_question)
    $(document).find('.right_answer_number').text(right_answer)
    $(document).find('.wrong_answer_number').text(wrong_answer_number)
    $(document).find('.progress-bar').css("width", style_percentage+"%");
    $(document).find('.progress-bar').attr("aria-valuenow",right_answer );
    $(document).find('.progress-bar').attr("aria-valuemax",total_question );
    $(document).find('.result_compare').text( result_compare);
    $(document).find('.result_percentage').text( style_percentage+"%");
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera

    
    

    return sheet_html;

   

}


</script>
@endsection