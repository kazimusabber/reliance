<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <!-- Custom fonts for this template-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{!! asset('admin/css/sb-admin-2.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/jquery.dataTables.min.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('plugins/summernote/summernote-bs4.min.css') !!}">
    <style>
        $light-gray: #eceef1;
        $gray: darken(#eceef1, 30%);
        $slate: darken(#eceef1, 70%);
        $turquoise: #1abc9c;

        * {
            box-sizing: border-box;
        }

        body {
            background: $light-gray;
            font-family: 'Slabo 27px', serif;
            color: $slate;
        }

        .wrapper {
            margin: 5em auto;
            max-width: 1000px;

            background-color: #fff;
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.06);
        }

        .header {
            padding: 30px 30px 0;
            text-align: center;

        &__title {
             margin: 0;
             text-transform: uppercase;
             font-size: 2.5em;
             font-weight: 500;
             line-height: 1.1;
         }
        &__subtitle {
             margin: 0;
             font-size: 1.5em;
             color: $gray;
             font-family: 'Yesteryear', cursive;
             font-weight: 500;
             line-height: 1.1;
         }
        }

        //Grid Container
          .cards {
              padding: 15px;
              display: flex;
              flex-flow: row wrap;
          }

        //Cards
          .card {
              margin: 15px;
              width: calc((100% / 3) - 30px);
              transition: all 0.2s ease-in-out;

        //media queries for stacking cards
        @media screen and (max-width: 991px) {
            width: calc((100% / 2) - 30px);
        }

        @media screen and (max-width: 767px) {
            width: 100%;
        }

        &:hover {
        .card__inner {
            background-color: $turquoise;
            transform: scale(1.05);
        }
        }

        &__inner {
             width: 100%;
             padding: 30px;
             position: relative;
             cursor: pointer;

             background-color: $gray;
             color: $light-gray;
             font-size: 1.5em;
             text-transform: uppercase;
             text-align: center;

             transition: all 0.2s ease-in-out;

        &:after {
             transition: all 0.3s ease-in-out;
         }

        .fa {
            width: 100%;
            margin-top: .25em;
        }
        }

        //Expander
  &__expander {
              transition: all 0.2s ease-in-out;
              background-color: $slate;
              width: 100%;
              position: relative;

              display: flex;
              justify-content: center;
              align-items: center;

              text-transform: uppercase;
              color: $light-gray;
              font-size: 1.5em;

        .fa {
            font-size: 0.75em;
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;

        &:hover {
             opacity: 0.9;
         }
        }
        }

        &.is-collapsed {

        .card__inner {
        &:after {
             content: "";
             opacity: 0;
         }
        }
        .card__expander {
            max-height: 0;
            min-height: 0;
            overflow: hidden;
            margin-top: 0;
            opacity: 0;
        }
        }

        &.is-expanded {

        .card__inner {
            background-color: $turquoise;

        &:after{
             content: "";
             opacity: 1;
             display: block;
             height: 0;
             width: 0;
             position: absolute;
             bottom: -30px;
             left: calc(50% - 15px);
             border-left: 15px solid transparent;
             border-right: 15px solid transparent;
             border-bottom: 15px solid #333a45;
         }

        //folder open icon
          .fa:before {
              content: "\f115";
          }
        }

        .card__expander {
            max-height: 1000px;
            min-height: 200px;
            overflow: visible;
            margin-top: 30px;
            opacity: 1;
        }

        &:hover {
        .card__inner {
            transform: scale(1);
        }
        }
        }

        &.is-inactive {
        .card__inner {
            pointer-events: none;
            opacity: 0.5;
        }

        &:hover {
        .card__inner {
            background-color: $gray;
            transform: scale(1);
        }
        }
        }
        }


        //Expander Widths

        //when 3 cards in a row
        @media screen and (min-width: 992px) {

            .card:nth-of-type(3n+2) .card__expander {
                margin-left: calc(-100% - 30px);
            }
            .card:nth-of-type(3n+3) .card__expander {
                margin-left: calc(-200% - 60px);
            }
            .card:nth-of-type(3n+4) {
                clear: left;
            }
            .card__expander {
                width: calc(300% + 60px);
            }

        }

        //when 2 cards in a row
        @media screen and (min-width: 768px) and (max-width: 991px) {

            .card:nth-of-type(2n+2) .card__expander {
                margin-left: calc(-100% - 30px);
            }
            .card:nth-of-type(2n+3) {
                clear: left;
            }
            .card__expander {
                width: calc(200% + 30px);
            }

        }

    </style>
</head>
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    @include('admin.inc.sidebar')
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            @include('admin.inc.header')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            @yield('body')
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('admin.inc.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{!! '/logout' !!}" method="POST">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{!! asset('admin/js/jquery.min.js') !!}"></script>
<script src="{!! asset('admin/js/bootstrap.bundle.min.js') !!}"></script>

<!-- Core plugin JavaScript-->
<script src="{!! asset('admin/js/jquery.easing.min.js') !!}"></script>
<script src="{!! asset('js/jquery.dataTables.min.js') !!}"></script>


<!-- Custom scripts for all pages-->
<script src="{!! asset('admin/js/sb-admin-2.min.js') !!}"></script>

<script src="{!! asset('plugins/summernote/summernote-bs4.min.js') !!}"></script>

<!-- Page level plugins -->
<!-- <script src="{!! asset('admin/js/Chart.min.js') !!}"></script> -->

<!-- Page level custom scripts -->
<!-- <script src="{!! asset('admin/js/demo/chart-area-demo.js') !!}"></script>
<script src="{!! asset('admin/js/demo/chart-pie-demo.js') !!}"></script> -->
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
    $('.textarea').summernote()


     
} );

  $(document).on('change','.number_of_option',function(){
    var letters="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var options = $('.number_of_option option:selected').val();
    var res = letters.slice(0, options);
    var data_set =``;
    var option_number_answer =`<select name="ques_ans" id="select" class="form-control" required>

                            <option value="">Select Correct Answer</option>
                        `;
    for (var i = 0; i < res.length; i++) {
      var text_alp = res.charAt(i);

       data_set+=`<div class="row">
                      <div class="col-md-1">`
                          if(i ==0){
                            data_set+=`<label for="text-input" class=" form-control-label">Serial</label>`
                          }
                                    
                        data_set+=`<input class="form-control" type="text" name="que_serial[]" readonly value="${text_alp}">
                                </div>
                                <div class="col-md-11">`;
                                    if(i ==0){
                                    data_set+=`<label for="text-input" class=" form-control-label">Options</label>`
                                    }
                        data_set+=`<textarea class="form-control" name="que_option[]" required></textarea>
                                </div>
                            </div>
                            <br>`;

          option_number_answer+=`<option value="${text_alp}">${text_alp}</option>`
  }
  option_number_answer+=`</select>`;

  $(document).find('.option_section').html(data_set)
  $(document).find('.option_number_answer').html(option_number_answer)
  
console.log(data_set)
   })
  
  </script>


 
<script>
    var $cell = $('.card');

    //open and close card when clicked on card
    $cell.find('.js-expander').click(function() {

        var $thisCell = $(this).closest('.card');

        if ($thisCell.hasClass('is-collapsed')) {
            $cell.not($thisCell).removeClass('is-expanded').addClass('is-collapsed').addClass('is-inactive');
            $thisCell.removeClass('is-collapsed').addClass('is-expanded');

            if ($cell.not($thisCell).hasClass('is-inactive')) {
                //do nothing
            } else {
                $cell.not($thisCell).addClass('is-inactive');
            }

        } else {
            $thisCell.removeClass('is-expanded').addClass('is-collapsed');
            $cell.not($thisCell).removeClass('is-inactive');
        }
    });

    //close card when click on cross
    $cell.find('.js-collapser').click(function() {
        var $thisCell = $(this).closest('.card');
        $thisCell.removeClass('is-expanded').addClass('is-collapsed');
        $cell.not($thisCell).removeClass('is-inactive');

    });
</script>
<script type="text/javascript">
    function readURL(input,position) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(position).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#feature_img").change(function(){
        readURL(this,'#profile-img-tag');
    });
    $("#text-image").change(function(){
        readURL(this,'#course_image');
    });


    $("#baner_img").change(function(){
        readURL(this,'#profile-img-tag-baner_img');
    });

    

    function myFunction(){
            
                var req = $.ajax({
                    type:"GET",
                    url:"{{ url('check_new_student') }}",
                    data:{user_id:"{!! Auth::user()->id !!}",center_id:"{!! Auth::user()->center_id !!}"}
                });

                req.done(function(result){
                  var new_student = result.length;
                  $(document).find('#badge-counter').text(new_student)
                  var student_list ='';
                  if(result.length > 0){
                    for (var i = 0; i < result.length; i++) {
                      student_list +=`<a class="dropdown-item d-flex align-items-center" href="{{url('student-info/')}}/${result[i].id}">
                        <div class="mr-3">
                            <div class="icon-circle bg-primary">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">${result[i].created_at}</div>
                            <span class="font-weight-bold">${result[i].first_name}  ${result[i].last_name}</span>
                        </div>
                    </a>`
                    }
                  } else {
                    student_list +='No data found ';
                  }

          $(document).find('.new_student_notifacation').html(student_list);


                    
                });
            }

setInterval(myFunction, 1000 * 60 * 1)


$(document).on('change','.student_info_class',function(){
  var data_value = $(this).val();
  var data_key = $(this).attr('name');
  var user_id = $(this).attr('attr_id');
    var req = $.ajax({
                      type:"GET",
                      url:"{{ url('update_stu_info') }}",
                      data:{data_key,data_value,user_id}
                  });

    req.done(function(result){
      console.log(result)
    })
})
</script>




</body>

</html>
