@extends('frontend.layout.master')
@section('content')
@section('style')
@endsection
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text">
         <div class="col-md-9 ftco-animate pb-5"  style="margin-top:15%;">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>  <span>Apply Now <i class="ion-ios-arrow-forward"></i></span>
            </p>
            <h1 class="mb-0 bread">Apply Now</h1>
         </div>
      </div>
   </div>
</section>

<section class="ftco-section" style="background:#f3f3f7!important;padding:4em;">
   <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
         <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
            <span class="subheading">ONLINE ASSESSMENT</span>
            <h2>Latest news from our blog</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 ftco-animate fadeInUp ftco-animated">
            <nav style="width:100%;">
               <div class="nav nav-tabs" id="nav-tab" role="tablist" style="border-bottom: 1px solid #dcdcdc;text-align:center;">
                  <a class="nav-link active" id="nav-australia-tab" data-toggle="tab" href="#nav-australia" role="tab" aria-controls="nav-australia" aria-selected="true" style="margin: 0 30px;">Australia</a>
                  <a class="nav-link" id="nav-canada-tab" data-toggle="tab" href="#nav-canada" role="tab" aria-controls="nav-canada" aria-selected="false" style="margin: 0 30px;">Canada
                  </a>
                  
               </div>
            </nav>
            <div class="tab-content" id="nav-tabContent" style="margin-top:10%;">
               <div class="tab-pane show active" id="nav-australia" role="tabpanel" aria-labelledby="nav-australia-tab">
                  <form>
                     <div class="form-group">
                        <input type="text" class="form-control inputfield" aria-describedby="emailHelp" placeholder="Your Name*">
                     </div>
                     <div class="form-group">
                        <input type="email" class="form-control inputfield" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail Address*">
                     </div>
                     <div class="form-group">
                        <input type="text" class="form-control inputfield" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Number*">
                     </div>
                     <div class="form-group">
                        <select class="form-control inputfield">
                           <option disabled="disabled" selected="">--Select Age Range--</option>
                           <option value="25">18 - 24</option>
                           <option value="30">25 - 32</option>
                           <option value="25">33 - 39</option>
                           <option value="15">40 - 44</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <select class="form-control inputfield">
                           <option disabled="disabled" selected="">--Your Current Occupation--</option>
                           
                        </select>
                     </div>
                     <div class="form-group">
                        
                        <p style="font-size: 14px;line-height: 35px;width:60%;float:left;">Attach Resume (optional but recommended)</p>
                        <input type="file" name="aus_file" style="width: 30%;">
                     </div>
                     <div class="form-group">
                        <select name="aus_eng_lan" class="form-control inputfield">
                           <option value="0">Competent English</option>
                           <option value="10">Proficient English</option>
                           <option value="20">Superior English</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <select name="aus_skill" class="form-control inputfield">
                           <option value="0">Skilled Employment in Nominated Occupation</option>
                           <option value="0"> Less Than 3 Years</option>
                           <option value="5">At Least 3 Years</option>
                           <option value="10">At Least 5 Years</option>
                           <option value="15">8 Years or More</option>
                     </select>
                     </div>
                     <div class="form-group">
                        <select name="aus_qualification" class="form-control inputfield">
                           <option value="0">Your Highest Academic Qualification Achieved</option>
                           <option value="10">Diploma or Trade </option>
                           <option value="15">At least a Bachelor degree</option>
                           <option value="20">Doctorate</option>    
                        </select>
                     </div>
                     <div class="form-group">
                        <p class="text text-left">Have you ever been to Australia?</p>
                        <select class="form-control inputfield" id="AustYes">
                           <option value="0"> No</option>
                           <option value="1"> Yes</option>
                        </select>
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
               </div>
               <div class="tab-pane fade" id="nav-canada" role="tabpanel" aria-labelledby="nav-canada-tab">
                     <form>
                     <div class="form-group">
                        <input type="text" class="form-control inputfield" aria-describedby="emailHelp" placeholder="Your Name*">
                     </div>
                     <div class="form-group">
                        <input type="email" class="form-control inputfield" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail Address*">
                     </div>
                     <div class="form-group">
                        <input type="text" class="form-control inputfield" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Number*">
                     </div>
                     <div class="form-group">
                        <select class="form-control inputfield">
                           <option disabled="disabled" selected="">--Select Age Range--</option>
                           <option value="25">18 - 24</option>
                           <option value="30">25 - 32</option>
                           <option value="25">33 - 39</option>
                           <option value="15">40 - 44</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <select class="form-control inputfield">
                           <option disabled="disabled" selected="">--Your Current Occupation--</option>
                           
                        </select>
                     </div>
                     <div class="form-group">
                        
                        <p style="font-size: 14px;line-height: 35px;width:60%;float:left;">Attach Resume (optional but recommended)</p>
                        <input type="file" name="aus_file" style="width: 30%;">
                     </div>
                     <div class="form-group">
                        <select name="aus_eng_lan" class="form-control inputfield">
                           <option value="0">Competent English</option>
                           <option value="10">Proficient English</option>
                           <option value="20">Superior English</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <select name="can_skill" class="form-control inputfield">
                           <option value="0">Work Experience</option>
                           <option value="9">1 Year</option>    
                           <option value="11">2-3 Years </option>                      
                           <option value="13">4-5 Years </option>                      
                           <option value="15">6+ Years </option>     
                     </select>
                     </div>
                     <div class="form-group">
                        <select name="can_qualification" class="form-control inputfield">
                        <option value="0">Education</option>
                        <option value="25">Doctoral Level University Degree (PHD)</option>
                        <option value="23">Master's Level</option>
                        <option value="22">Two or more postsecondary degrees (PGD) - at least one for a program of at least 3 years</option>
                        <option value="21">Bachelors</option>
                        <option value="19">Post-secondary degree (honors pass course) 2 years</option>
                        <option value="15">Honors Pass Course 1 year</option>
                     </select>
                     </div>
                     <div class="form-group">
                        <p class="text text-left">Have you ever been to Canada?</p>
                        <select class="form-control inputfield" id="AustYes">
                           <option value="0"> No</option>
                           <option value="1"> Yes</option>
                        </select>
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
               </div>
            </div> 
         </div>
         <div class="col-md-6 d-flex ftco-animate fadeInUp ftco-animated">
         </div>
      </div>
   </div>
</section>
@endsection
@section('script')
<script>
   $('#nav-australia-tab').click(function(){
         $('#nav-australia').removeClass('fade');
         $('#nav-canada').addClass('fade');
      })
      $('#nav-canada-tab').click(function(){
         $('#nav-canada').removeClass('fade');
         $('#nav-australia').addClass('fade');
      })
</script>
@endsection