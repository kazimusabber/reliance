@extends('frontend.layout.master')
@section('content')
@section('style')
<style>
   .boxed-cover {
    background: #252a35;
    background: rgba(37,42,53,0.9);
    position: absolute;
    top: 0px;
    right: 0;
    width: 310px;
    height: 100%;
    z-index: 2!important;
    -webkit-transition: .4s all;
    -moz-transition: .4s all;
    -ms-transition: .4s all;
    -o-transition: .4s all;
    transition: .4s all; 
}
    .boxed-cover.boxed-cover-inside::before {
    content: ' ';
    width: 1px;
    position: absolute;
    left: -39px;
    bottom: 60%;
    border-top: 20px solid transparent;
    border-left: 20px solid transparent;
    border-bottom: 20px solid transparent;
    border-right-color: #252a35;
    border-right: 20px solid rgba(37,42,53,0.9);
    -webkit-transition: .45s all;
    -moz-transition: .45s all;
    -ms-transition: .45s all;
    -o-transition: .45s all;
    transition: .45s all;
}
.side_nav {
    width: 292px;
    position: absolute;
    top: 135px;
    color: #fff;
    background: #383e49;
    background: rgba(56,62,73,0.9);
    height: auto;
    width: 290px;
    z-index: 1;
    padding: 0;
    border: 1px solid #252a35;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    -webkit-transition: .25s -webkit-box-shadow;
    -moz-transition: .25s -moz-box-shadow;
    -ms-transition: .25s -ms-box-shadow;
    -o-transition: .25s -o-box-shadow;
    transition: .25s box-shadow;
    -webkit-box-shadow: 0 0 24px 11px rgba(36,39,47,0.35);
    -moz-box-shadow: 0 0 24px 11px rgba(36,39,47,0.35);
    box-shadow: 0 0 24px 11px rgba(36,39,47,0.35);
    margin-left: 70px;
}
.side_nav ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
.side_nav ul .red a {
    border-left: 4px solid #c80225;
}
.side_nav ul li {
  height: 55px;
    width: 100%;
    display: table;
    border-bottom: 1px solid #252a35;
    overflow: hidden;
    -webkit-transition: .25s all;
    -moz-transition: .25s all;
    -ms-transition: .25s all;
    -o-transition: .25s all;
    transition: .25s all;
    font-size: 15px;
    line-height: 1.3em;
  }
.side_nav ul li a {
    color: #fff;
    display: table-cell;
    vertical-align: middle;
    width: 100%;
    height: 100%;
    border-left: 2px solid #ccc;
    padding-left: 15px;
    padding-right: 60px;
    position: relative;
    background: url(/images/sg-corporate/arrow-back.png) right -100px no-repeat;
    -webkit-transition: .25s line-height,0.3s background;
    -moz-transition: .25s line-height,0.3s background;
    -ms-transition: .25s line-height,0.3s background;
    -o-transition: .25s line-height,0.3s background;
    transition: .25s line-height,0.3s background;
}
.side_nav ul li:first-child a {
    -webkit-border-radius: 8px 8px 0 0;
    -moz-border-radius: 8px 8px 0 0;
    border-radius: 8px 8px 0 0;
}
.side_nav ul li:last-child, .side_nav ul li:last-child a {
    -webkit-border-radius: 0 0 8px 8px;
    -moz-border-radius: 0 0 8px 8px;
    border-radius: 0 0 8px 8px;
}
.side_nav li.active {
    display: table;
    height: 55px!important;
    border-bottom: 1px solid #252a35;
    background: #252a35;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    /* border-radius: 10px 10px 0 0; */
}
.side_nav li.active a {
    font-size: inherit;
    line-height: inherit;
    -webkit-border-radius: 8px 0 0 0;
    -moz-border-radius: 8px 0 0 0;
    border-radius: 8px 0 0 0;
    font-size: 0;
    background: url(/images/arrow-back.png) right 0 no-repeat;
}
.side_nav li.active a:after {
    content: ' Back';
    font-size: 15px;
    line-height: 2em;
}
.non-student-cta-content-wrapper {
    display: flex;
    justify-content: center;
}

.changepositon {    
    top: 600px;
    -webkit-transition: all 0.7s ease-out;
       -moz-transition: all 0.7s ease-out;
        -ms-transition: all 0.7s ease-out;
         -o-transition: all 0.7s ease-out;
            transition: all 0.7s ease-out;
}
   .inputfield{
      background: #f2f2f2 none repeat scroll 0 0 !important ;
      border: 1px solid #d5d5d5;
      transition: all .3s ease 0s;
   }
   .cooseusicon{
       position: absolute;
       top: 140px;
       left: 42%;
       width: 40px;
       height: 40px;
       border-radius: 50%;
       background: #ffffff;
   }
   .chooseustext{
      font-size: 12px !important;
   }
   .insert_form{
      padding:5px;
   }
   .close-caption-more{
      background-color: #27a9dc;
      position: absolute;
      top: 0px;
      left: 0px;
      width: 1px;
      height: 1px;
      border-top: 15px solid #27a9dc;
      border-right: 36px solid #27a9dc;
      border-bottom: 35px solid #27a9dc;
      border-left: 22px solid #27a9dc;
      cursor: pointer;
      color: #ffffff;
      font-size: 20px;
   }
   .backgroundimagediv{
      background-image:url(images/bg_1.jpg);
      height:180px;
      background-size:cover;

   }
   .blackLayer{
     width:100%;
     height:100%;
     background-color:#000;
     opacity:0.5;

   }
   .sidebox_facts {
      padding: 20px;
      background-color: #edf2f4;
      border: 1px solid #e1e5e7;
   }
   .textcontentdiv{
      min-height:180px;
   }
   .brand_wrapper {
      background-image:url(images/bg_3.jpg);
      background-size:cover;
      width:20%;
      float: left;
   }
   .brand_wrapper span{
      text-align: center;
      font-size:18px;
      font-weight: 400;
      color:#ffffff;
      margin-top:10px;
   }
   .brand_wrapper img {
      width:100%;
   }
   
   .under_lineone {
       width:20%;
       height: 67px;
       background-color: #ba2c2c;
       position: absolute;
       bottom: 0;
       display: block;
       opacity: .85;
       filter: alpha(opacity=100);
       -webkit-transition: .2s all;
       -moz-transition: .2s all;
       -ms-transition: .2s all;
       -o-transition: .2s all;
         transition: .5s ease;
   }
   .under_linetwo {
       width:20%;
       height: 67px;
       background-color: #2ca3ba;
       position: absolute;
       bottom: 0;
       display: block;
       opacity: .85;
       filter: alpha(opacity=100);
       -webkit-transition: .2s all;
       -moz-transition: .2s all;
       -ms-transition: .2s all;
       -o-transition: .2s all;
       transition: .5s ease;
   }
   .brand_wrapper .inner {
       display: block;
       vertical-align: bottom;
        height: 250px; 
       padding: 20px;
       z-index: 7;
       position: relative;
       /* overflow: hidden; */
       text-align: left;
   }
   .brand_wrapper:hover .under_linetwo {
     height: 100%;
   }

   .brand_wrapper:hover .under_lineone {
     height: 100%;
   }
   .brand_wrapper:hover .inner .uniname {
     top: 0px;
     transition: .5s ease;
   }
   .unidescription{
      opacity:0;
   }
   .brand_wrapper:hover .inner .unidescription {
      opacity:1;
      color:#ffffff;
      font-size: 12px;
      margin-top: 20px;
   }
   .brand_wrapper .inner .uniname {
       font-size: 16px;
       font-weight: 500;
       line-height: 1.1;
       position: absolute;
       left: 20px;
       top:190px;
      color:#ffffff;
   }
</style>
@endsection

<div class="hero-wrap">
      <div class="side_nav col-md-3 deattach"  id="side_nav">
         <ul>
            <li class="red" id="ukeurope">
               <a href="javascript:void(0)">
                Study in the UK or Europe
               </a>
            </li>
            <li class="red" id="candiv">
               <a href="javascript:void(0)">
                Study in the USA
               </a>
            </li>
            <li class="red" id="austdiv">
               <a href="javascript:void(0)">
                Study in Australia or New Zealand 
               </a>
            </li>  
         </ul>
         <div class="insert_form"></div>
     </div>
      <div class="home-slider owl-carousel">

        @foreach($sliders as $sliderinfo)
         <div class="slider-item" style="background-image:url({{url('images', $sliderinfo->slider_img)}});">
            <div class="container-fluid">
               <div class="boxed-cover boxed-cover-inside">
                  <!-- <i class="close-caption-more fa fa-times"></i> -->
                  <div class="slider-text align-items-center" style="margin-top:50%;">
                     <div class="text w-100 text-center ftco-animate" >
                        <h2> {!! $sliderinfo->title !!} </h2>
                        <h3 style="color:#ffffff;"> {!! $sliderinfo->description !!}</h3>
                        <p style="margin-top:20%;"><a href="{{url('apply')}}" class="btn btn-white" style="color:#ffffff;background-color:#a43c3c;border:1px solid #a43c3c;"><i class="fa fa-chevron-left" aria-hidden="true"></i> Apply Now</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
   
   <section class="ftco-section ftco-no-pb ftco-no-pt" style="background-color:#413c69;height:100px; ">
            <div class="container py-5">
               <div class="row">
                  <div class="col-md-12">
                     <h3 style="color:#ffffff;">We help students get to where they want to be. All the latest information for students around our response to COVID-19 and move to teaching online can be found on our Centre and College websites.</h3>
                  </div>
                  
               </div>
            </div>
         </section>
      <div class="australia" id="australiadiv">
         <section class="ftco-section ftco-no-pb ftco-no-pt backgroundimagediv">
            <div class="container-fluid py-5 blackLayer">
               <div class="row">
                  <div class="col-md-12" style="text-align:center;">
                     <h1 style="color:#ffffff;line-height: 3.5;font-weight: 900;">I want to study in Australia or New Zealand</h1>
                  </div>
               </div>
            </div>
         </section>
         <section class="textcontentdiv">
            <div class="container-fluid" style="margin:0px;padding:25px">
               <div class="row d-flex no-gutters">
                  <div class="col-md-9">
                     <p>
                        A university education from the USA is recognised as being among the best in the world, providing exciting career and lifestyle prospects for international students.

                        Study Group pathway programs are specially designed, university-recognised courses that help you gain an academic and English language advantage, enabling you to meet the stringent entry requirements for leading US universities. We provide a choice of programs to excel the learning standards you need to succeed. 
                     </p>
                  </div>
                  <div class="col-md-3">
                     <div class="sidebox_facts">#01
   The USA is the number one destination for international students</div>
                  </div>
               </div>
            </div>
         </section>
         <section class="textcontentdiv">
            <div class="container-fluid" style="margin:0;padding:0">
               <div class="row d-flex no-gutters">
                  <div class="col-md-12">
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>
                         <span class="under_lineone"></span>  
                     </div>
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>
                         <span class="under_linetwo"></span>  
                     </div>
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>

                         <span class="under_lineone"></span>  
                     </div>
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>

                         <span class="under_linetwo"></span>  
                     </div>
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>

                         <span class="under_lineone"></span>  
                     </div>
                     
                  </div>
               </div>
            </div>
         </section>
      </div>
   <div class="canada" id="canadadiv">
      <section class="ftco-section ftco-no-pb ftco-no-pt backgroundimagediv">
         <div class="container-fluid py-5 blackLayer">
            <div class="row">
               <div class="col-md-12" style="text-align:center;">
                  <h1 style="color:#ffffff;line-height: 3.5;font-weight: 900;">I want to study in the USA</h1>
               </div>
               
            </div>
         </div>
      </section>
      <section class="textcontentdiv">
         <div class="container-fluid" style="margin:0px;padding:25px">
            <div class="row d-flex no-gutters">
               <div class="col-md-9">
                  <p>
                     A university education from the USA is recognised as being among the best in the world, providing exciting career and lifestyle prospects for international students.

                     Study Group pathway programs are specially designed, university-recognised courses that help you gain an academic and English language advantage, enabling you to meet the stringent entry requirements for leading US universities. We provide a choice of programs to excel the learning standards you need to succeed. 
                  </p>
               </div>
               <div class="col-md-3">
                  <div class="sidebox_facts">#01
The USA is the number one destination for international students</div>
               </div>
            </div>
         </div>
      </section>
      <section class="textcontentdiv">
            <div class="container-fluid" style="margin:0;padding:0">
               <div class="row d-flex no-gutters">
                  <div class="col-md-12">
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>
                         <span class="under_lineone"></span>  
                     </div>
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>
                         <span class="under_linetwo"></span>  
                     </div>
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>

                         <span class="under_lineone"></span>  
                     </div>
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>

                         <span class="under_linetwo"></span>  
                     </div>
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>

                         <span class="under_lineone"></span>  
                     </div>
                     
                  </div>
               </div>
            </div>
         </section>
   </div>
   <div class="ukeurope" id="ukeuropediv">
      <section class="ftco-section ftco-no-pb ftco-no-pt backgroundimagediv">
         <div class="container-fluid py-5 blackLayer">
            <div class="row">
               <div class="col-md-12" style="text-align:center;">
                  <h1 style="color:#ffffff;line-height: 3.5;font-weight: 900;">I want to study in the UK or Europe</h1>
               </div>
               
            </div>
         </div>
      </section>
      <section class="textcontentdiv">
         <div class="container-fluid" style="margin:0px;padding:25px">
            <div class="row d-flex no-gutters">
               <div class="col-md-9">
                  <p>
                     A university education from the USA is recognised as being among the best in the world, providing exciting career and lifestyle prospects for international students.

                     Study Group pathway programs are specially designed, university-recognised courses that help you gain an academic and English language advantage, enabling you to meet the stringent entry requirements for leading US universities. We provide a choice of programs to excel the learning standards you need to succeed. 
                  </p>
               </div>
               <div class="col-md-3">
                  <div class="sidebox_facts">#01
The USA is the number one destination for international students</div>
               </div>
            </div>
         </div>
      </section>
      <section class="textcontentdiv">
            <div class="container-fluid" style="margin:0;padding:0">
               <div class="row d-flex no-gutters">
                  <div class="col-md-12">
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>
                         <span class="under_lineone"></span>  
                     </div>
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>
                         <span class="under_linetwo"></span>  
                     </div>
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>

                         <span class="under_lineone"></span>  
                     </div>
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>

                         <span class="under_linetwo"></span>  
                     </div>
                     <div class="brand_wrapper">
                        <a href="https://isc.cardiff.ac.uk" class="inner" target="_blank">
                           <span class="uniname">
                               Cardiff University
                           </span>
                           <p class="unidescription">
                               Cardiff University is a respected Russell Group university with a proud history of celebrating difference.
                               <button class="btn btn-white btn-sm" style="margin-top:5px;">Visit</button>
                           </p>
                       </a>

                         <span class="under_lineone"></span>  
                     </div>
                     
                  </div>
               </div>
            </div>
         </section>
   </div>
    <section class="ftco-counter bg-light ftco-no-pt" id="section-counter" style="background-image:url(images/bg_3.jpg); background-size: cover;height:350px;">
         <div class="container" style="margin-top:5%;">
          <h1 style="text-align:center;font-size:34px;">Our Global Achievements.</h1>
            <div class="row" style="margin-top:5%;">
              @foreach($scinfos as $sc_info)
               <div class="col-md-6 col-lg-2 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                     <div class="text">
                        <strong class="number" data-number="{{$sc_info->quantity}}">0</strong>
                     </div>
                     <div class="text">
                        <span>{{$sc_info->title}}</span>
                     </div>
                  </div>
               </div>
              @endforeach
         </div>
      </section>
      <section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
         <div class="container py-5">
            <div class="row">
               <div class="col-md-12" style="text-align:center;">
                  <h1 class="mb-3 mb-sm-0 stdtext" style="color:black; font-size: 28px;font-weight: 700">{{$logo->title}}</h1>
               </div>
               
            </div>
         </div>
      </section>
      <section class="ftco-no-pt" id="collapse_One">
         <div class="container-fluid" style="margin:0px;padding:25px">
            <div class="row d-flex no-gutters">
               <div class="col-md-6 pl-md-5 py-md-5">
                  <div class="heading-section pl-md-4 pt-md-5" style="text-align:center;"> 
                     <h2 class="mb-4">Universities & Collages We Represent.</h2>
                  </div>
                  <div class="services-2" style="text-align:center;">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                  </div>
               </div>
               <div class="col-md-6"  style="padding:50px;">
                  <div class="row" >
                     
                    @foreach($client_logos as $clintlogo)
                     <div class="col-md-3">
                        <img src="{{asset('images/'.$clintlogo->client_logo_img)}}" alt="nothing" height="120px" class="img-thumbnail" width="120px;" style="margin:3px;"/>
                     </div>
                    @endforeach
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12" style="text-align:center;">
                  <button class="btn btn-primary">Read More</button>
               </div>
            </div>
         </div>
      </section>

      <?php 
       $i = 0;
      ?>
      @foreach($services as $serviceinfo)
        <?php 
          $i++;
        ?>
      @if($i%2 != 0)

      <section class="ftco-no-pt bg-light" id="collapse_One">
         <div class="container-fluid" style="margin:0px;padding:0px">
            <div class="row d-flex no-gutters">
               <div class="col-md-6 d-flex">
                  <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url({{url('images', $serviceinfo->service_img)}});"></div>
               </div>
               <div class="col-md-6 pl-md-5 py-md-5">
                  <div class="heading-section pl-md-4 pt-md-5">
                     <h2 class="mb-4">{{ $serviceinfo->title }}</h2>
                  </div>
                  <div class="services-2 w-100 d-flex">
                     <div class="text pl-4">
                        <p>{{ $serviceinfo->description }}</p>
                     </div>
                  </div>
                  <div class="services-2 w-100 d-flex">
                     <div class="col-md-4"></div>
                     <div class="col-md-4">
                        <button class="btn btn-primary">Learn More</button>
                     </div>
                     <div class="col-md-4"></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @else
      <section class="ftco-section ftco-no-pt" id="collapse_One" style="padding-bottom:0px;">
         <div class="container-fluid" style="margin:0px;padding:0px">
            <div class="row d-flex no-gutters">
               <div class="col-md-6 pl-md-5 py-md-5">
                  <div class="heading-section pl-md-4 pt-md-5">
                     <h2 class="mb-4">{{ $serviceinfo->title }}</h2>
                  </div>
                  <div class="services-2 w-100 d-flex">
                     <div class="text pl-4">
                        <p>{{ $serviceinfo->description }}</p>
                     </div>
                  </div>
                  <div class="services-2 w-100 d-flex">
                     <div class="col-md-4"></div>
                     <div class="col-md-4">
                        <button class="btn btn-primary">Learn More</button>
                     </div>
                     <div class="col-md-4"></div>
                  </div>
               </div>
               <div class="col-md-6 d-flex">
                  <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url({{url('images', $serviceinfo->service_img)}});"></div>
               </div>
            </div>
         </div>
      </section>
      @endif

      @endforeach
      

      <!-- <section class="ftco-section ftco-no-pt ftco-faqs">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="img-faqs w-100">
                     <div class="img mb-4 mb-sm-0" style="background-image:url(images/about-2.jpg);"></div>
                     <div class="img img-2 mb-4 mb-sm-0" style="background-image:url(images/about-1.jpg);"></div>
                  </div>
               </div>
               <div class="col-lg-6 pl-lg-5">
                  <div class="heading-section mb-5 mt-5 mt-lg-0">
                     <span class="subheading">FAQs</span>
                     <h2 class="mb-3">Frequently Asks Questions</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                     <div class="card">
                        <div class="card-header p-0" id="headingOne">
                           <h2 class="mb-0">
                              <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                 <p class="mb-0">How to fixed a problem?</p>
                                 <i class="fa" aria-hidden="true"></i>
                              </button>
                           </h2>
                        </div>
                        <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                           <div class="card-body py-3 px-0">
                              <ol>
                                 <li>Far far away, behind the word mountains</li>
                                 <li>Consonantia, there live the blind texts</li>
                                 <li>When she reached the first hills of the Italic Mountains</li>
                                 <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                 <li>Separated they live in Bookmarksgrove right</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header p-0" id="headingTwo" role="tab">
                           <h2 class="mb-0">
                              <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                 <p class="mb-0">How to manage your business loans?</p>
                                 <i class="fa" aria-hidden="true"></i>
                              </button>
                           </h2>
                        </div>
                        <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                           <div class="card-body py-3 px-0">
                              <ol>
                                 <li>Far far away, behind the word mountains</li>
                                 <li>Consonantia, there live the blind texts</li>
                                 <li>When she reached the first hills of the Italic Mountains</li>
                                 <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                 <li>Separated they live in Bookmarksgrove right</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header p-0" id="headingThree" role="tab">
                           <h2 class="mb-0">
                              <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                 <p class="mb-0">How to grow your investments funds?</p>
                                 <i class="fa" aria-hidden="true"></i>
                              </button>
                           </h2>
                        </div>
                        <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                           <div class="card-body py-3 px-0">
                              <ol>
                                 <li>Far far away, behind the word mountains</li>
                                 <li>Consonantia, there live the blind texts</li>
                                 <li>When she reached the first hills of the Italic Mountains</li>
                                 <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                 <li>Separated they live in Bookmarksgrove right</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header p-0" id="headingFour" role="tab">
                           <h2 class="mb-0">
                              <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                 <p class="mb-0">What are those requirements for businesses?</p>
                                 <i class="fa" aria-hidden="true"></i>
                              </button>
                           </h2>
                        </div>
                        <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                           <div class="card-body py-3 px-0">
                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <section class="ftco-section bg-light" style="padding-top:100px;">
         <div class="container">
            
            <div class="row">
               <div class="col-md-6 col-lg-6 ftco-animate" style="position: relative;">
                  <img src="{{asset('images/'.$b_t->instractor_image)}}" alt="nothing" height="350px" width="350px;" style="position:absolute;top: -20px;
    margin-left: 24%;"/>
               </div>
               <div class="col-md-6 col-lg-6 ftco-animate" style="margin-top:5%;">
                   <div class="services-2 w-100 d-flex">
                     <div class="text pl-4">
                        <h2 class="mb-4">{{ $b_t->instractor_title }}</h2>
                        <p>{!! $b_t->instractor_details !!}.</p>
                     </div>
                  </div>
                  <div class="services-2 w-100 d-flex">
                     
                     <div class="col-md-4">
                        <button class="btn btn-primary">{{ $b_t->title }}</button>
                     </div>
                     <div class="col-md-4"></div>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      
      <section class="ftco-section" style="background:#f3f3f7!important;padding:4em;">
         <div class="welcome-banner d-none d-lg-block" style="background-image: url(images/welcome-banner.png);
    background-position: 100% 100%;
    background-attachment: fixed;
    background-repeat: no-repeat;
    bottom: 0;
    height: 100%;
    position: absolute;
    right: 0;
    width: 46%;"></div>
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section text-center ftco-animate">
                  <span class="subheading">ONLINE ASSESSMENT</span>
                  <h2>Latest news from our blog</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 ftco-animate">
                  <nav style="width:100%;">
                     <div class="nav nav-tabs" id="nav-tab" role="tablist" style="border-bottom: 1px solid #dcdcdc;text-align:center;">
                        <a class="nav-link active" id="nav-australia-tab" data-toggle="tab" href="#nav-australia" role="tab" aria-controls="nav-australia" aria-selected="true" style="margin: 0 30px;">Australia</a>
                        <a class="nav-link" id="nav-canada-tab" data-toggle="tab" href="#nav-canada" role="tab" aria-controls="nav-canada" aria-selected="false" style="margin: 0 30px;">Canada
                        </a>
                        
                     </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent" style="margin-top:10%;">
                     <div class="tab-pane show active" id="nav-australia" role="tabpanel" aria-labelledby="nav-australia-tab">
                        <form action="{{url('aussubmitform')}}" method="POST" enctype="multipart/form-data">
                           @csrf
                           <div class="form-group">
                              <input type="text" name="_name" class="form-control inputfield"  aria-describedby="emailHelp" placeholder="Your Name*">
                           </div>
                           <div class="form-group">
                              <input type="email" class="form-control inputfield" id="exampleInputEmail1" aria-describedby="emailHelp" name="_email" placeholder="E-mail Address*">
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control inputfield" id="exampleInputEmail1" aria-describedby="emailHelp" name="_mobile" placeholder="Contact Number*">
                           </div>
                           <div class="form-group">
                              <select class="form-control inputfield" name="_agerange">
                                 <option disabled = "disabled" selected>--Select Age Range--</option>
                                 <option value="18 - 24">18 - 24</option>
                                 <option value="25 - 32">25 - 32</option>
                                 <option value="33 - 39">33 - 39</option>
                                 <option value="40 - 44">40 - 44</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <select class="form-control inputfield" name="_ausoccupation">
                                 <option disabled="disabled" selected>--Your Current Occupation--</option>
                                 <option value="">Student</option>
                              </select>
                           </div>
                           <div id="ausdiv">
                              <div class="form-group" id='ausfiles'>
                                <p style="font-size: 14px;line-height: 35px;width:60%;float:left;">Attach File (optional but recommended)</p>
                                 <input type="file" name="ausfiles[]"><br>
                              </div>
                           </div>
                            <div class="form-group">
                              <a href="javascript:void(0)" class="btn btn-sm btn-primary" id="addmore">Add More</a>
                            </div>
                            <div class="form-group">
                              <select name="aus_eng_lan" class="form-control inputfield" >
                                 <option value="Competent English">Competent English</option>
                                 <option value="Proficient English">Proficient English</option>
                                 <option value="Superior English">Superior English</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <select  class="form-control inputfield" name="_ausexpyear">
                                 <option disabled="disabled" selected>Skilled Employment in Nominated Occupation</option>
                                 <option value="Less Than 3 Years">Less Than 3 Years</option>
                                 <option value="At Least 3 Years">At Least 3 Years</option>
                                 <option value="At Least 5 Years">At Least 5 Years</option>
                                 <option value="8 Years or More">8 Years or More</option>
                           </select>
                           </div>
                           <div class="form-group">
                              <select name="aus_qualification" class="form-control inputfield">
                                 <option disabled="disabled" selected>Your Highest Academic Qualification Achieved</option>
                                 <option value="Diploma or Trade">Diploma or Trade </option>
                                 <option value="At least a Bachelor degree">At least a Bachelor degree</option>
                                 <option value="Doctorate">Doctorate</option>    
                              </select>
                           </div>
                           <div class="form-group">
                              <p class="text text-left">Have you ever been to Australia?</p>
                              <select class="form-control inputfield" name="_ausgostatus">
                                 <option value="0"> No</option>
                                 <option value="1"> Yes</option>
                              </select>
                           </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                     </div>
                     <div class="tab-pane fade" id="nav-canada" role="tabpanel" aria-labelledby="nav-canada-tab">
                          <form action="{{url('cansubmitform')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <input type="text" class="form-control inputfield"  aria-describedby="emailHelp" placeholder="Your Name*" name="_name">
                            </div>
                            <div class="form-group">
                              <input type="email" class="form-control inputfield" id="exampleInputEmail1" aria-describedby="emailHelp" name="_email" placeholder="E-mail Address*">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control inputfield" id="exampleInputEmail1" aria-describedby="emailHelp" name="_mobile" placeholder="Contact Number*">
                            </div>
                            <div class="form-group">
                              <select class="form-control inputfield" name="_agerange">
                                 <option disabled="disabled" selected>--Select Age Range--</option>
                                 <option value="18 - 24">18 - 24</option>
                                 <option value="25 - 32">25 - 32</option>
                                 <option value="33 - 39">33 - 39</option>
                                 <option value="40 - 44">40 - 44</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <select class="form-control inputfield" name="_canoccupation">
                                 <option disabled="disabled" selected>--Your Current Occupation--</option>
                              </select>
                            </div>
                            <div id="can_div">
                              <div class="form-group" id='canfiles'>
                                <p style="font-size: 14px;line-height: 35px;width:60%;float:left;">Attach File (optional but recommended)</p>
                                 <input type="file" name="canfiles[]"><br>
                              </div>
                           </div>
                            <div class="form-group">
                              <a href="javascript:void(0)" class="btn btn-sm btn-primary" id="addmorecan">Add More</a>
                            </div>
                            <div class="form-group">
                              <select name="can_eng_lan" class="form-control inputfield">
                                 <option value="Competent English">Competent English</option>
                                 <option value="Proficient English">Proficient English</option>
                                 <option value="Superior English">Superior English</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <select name="can_experiance" class="form-control inputfield">
                                 <option>Work Experience</option>
                                 <option value="1 Year">1 Year</option>    
                                 <option value="2-3 Years">2-3 Years </option>                      
                                 <option value="4-5 Years">4-5 Years </option>                      
                                 <option value="6+ Years">6+ Years </option>     
                              </select>
                            </div>
                            <div class="form-group">
                              <select name="can_qualification" class="form-control inputfield">
                                <option>Education</option>
                                <option value="Doctoral Level University Degree (PHD)">Doctoral Level University Degree (PHD)</option>
                                <option value="Master's Level">Master's Level</option>
                                <option value="Two or more postsecondary degrees (PGD) - at least one for a program of at least 3 years">Two or more postsecondary degrees (PGD) - at least one for a program of at least 3 years</option>
                                <option value="Bachelors">Bachelors</option>
                                <option value="Post-secondary degree (honors pass course) 2 years">Post-secondary degree (honors pass course) 2 years</option>
                                <option value="Honors Pass Course 1 year">Honors Pass Course 1 year</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <p class="text text-left">Have you ever been to Canada?</p>
                              <select class="form-control inputfield" id="_cangostatus">
                                 <option value="0"> No</option>
                                 <option value="1"> Yes</option>
                              </select>
                           </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                     </div>
                  </div> 
               </div>
               <div class="col-md-6 d-flex ftco-animate" >
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section testimony-section">
         <div class="overlay" style="background-image:url(images/image_4.jpg);opacity:0.8;background-size: cover;"></div>
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                  <span class="subheading" style="color:#ffffff;">TESTIMONIALS</span>
                  <h2 style="color:#ffffff;">Happy Clients &amp; Feedbacks</h2>
               </div>
            </div>
            <div class="row ftco-animate">
               <div class="col-md-12">
                  <div class="carousel-testimony owl-carousel ftco-owl">
                     <div class="item">
                        <div class="testimony-wrap py-4">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                 <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap py-4">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                 <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap py-4">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                 <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap py-4">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                 <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap py-4">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                 <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section">
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section text-center ftco-animate">
                  <span class="subheading"> Choose Us..</span>
                  <h2>Our area of Consultancy</h2>
               </div>
            </div>
            <div class="row">
              @foreach($consultancy as $consultancyinfo)
               <div class="col-md-6 col-lg-4 ftco-animate">
                  <img src="{{asset('images/'.$consultancyinfo->service_img)}}" alt="nothing" height="150px" width="100%;" />
                  <div class="block-7">
                     <div class="text-center">
                        <div class="cooseusicon d-flex align-items-center justify-content-center"><span class="fa fa-star"></span></div>
                        <span class="excerpt d-block">{{ $consultancyinfo->title }}</span>
                     </div>
                     <p class="chooseustext">{{ $consultancyinfo->description }}</p>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </section>
      <section class="ftco-section  bg-light" style="padding-bottom:0px;padding-top:0px;">
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section text-center ftco-animate">
                  <span class="subheading">Write a Message</span>
                  <h2>Have Any Questions?</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 ftco-animate">
                  <form action="{{url('sendquestion')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                     <div class="form-group col-md-6">
                        <select name="_country" class="form-control inputfield">
                           <option disabled selected>--Select Country--</option>
                           <option value="Bangladesh">Bangladesh</option>
                           <option value="Bangladesh">India</option>
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <input type="text" class="form-control inputfield"  name="_name" aria-describedby="emailHelp" placeholder="Name">
                     </div>
                     <div class="form-group col-md-6">
                        <input type="text" class="form-control inputfield" name="_mobile" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mobile Number">
                     </div>
                     <div class="form-group col-md-6">
                        <input type="email" class="form-control inputfield" name="_email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                     </div>
                     <div class="form-group col-md-12">
                        <textarea rows="8" class="form-control inputfield" name="_message" placeholder="Message"></textarea>
                     </div>
                     <div class="form-group col-md-6">
                        <p>Attach Resume:</p>
                        <input type="file" name="resumefile" style="width: 100%;">
                     </div>
                     <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                     </div>
                  </form>
               </div>
            <div class="col-md-6 d-flex ftco-animate" >
               <div class="question-form-img">
               <img src="{{ url('images/question-banner.png') }}" alt="question-banner" title="Question Banner">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
@endsection
@section('script')
<script>
     

     
      $("#exampleModalCenter").modal();
      

      $("#addmore").click(function() {
       
          var x = $("#ausfiles");
          y = x.clone();
          y.insertAfter("#ausdiv");
        });

      $("#addmorecan").click(function() {
          var x = $("#canfiles");
          y = x.clone();
          y.insertAfter("#can_div");
        });
      



      $('#nav-australia-tab').click(function(){
         $('#nav-australia').removeClass('fade');
         $('#nav-canada').addClass('fade');
      })
      $('#nav-canada-tab').click(function(){
         $('#nav-canada').removeClass('fade');
         $('#nav-australia').addClass('fade');
      })
         
      $(function () {
         $('.stdtext').textillate({
            // the default selector to use when detecting multiple texts to animate
  

        // enable looping
        loop: true,

        // sets the minimum display time for each text before it is replaced
        minDisplayTime: 2000,

        // sets the initial delay before starting the animation
        // (note that depending on the in effect you may need to manually apply
        // visibility: hidden to the element before running this plugin)
        initialDelay: 0,

        // set whether or not to automatically start animating
        autoStart: true,

        // custom set of 'in' effects. This effects whether or not the
        // character is shown/hidden before or after an animation
        inEffects: [],

        // custom set of 'out' effects
        outEffects: [ 'hinge' ],

        // in animation settings
        in: {
         // set the effect name
          effect: 'fadeInLeftBig',

          // set the delay factor applied to each consecutive character
          delayScale: 1.5,

          // set the delay between each character
          delay: 50,

          // set to true to animate all the characters at the same time
          sync: false,

          // randomize the character sequence
          // (note that shuffle doesn't make sense with sync = true)
          shuffle: false,

          // reverse the character sequence
          // (note that reverse doesn't make sense with sync = true)
          reverse: false,

          // callback that executes once the animation has finished
          callback: function () {}
        },

        // out animation settings.
        out: {
          effect: 'hinge',
          delayScale: 1.5,
          delay: 50,
          sync: false,
          shuffle: false,
          reverse: false,
          callback: function () {}
        },

        // callback that executes once textillate has finished
        callback: function () {},

        // set the type of token to animate (available types: 'char' and 'word')
        type: 'char',
               });
      })

      

      $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();
        $('.boxed-cover').css({
          opacity: function() {
            var elementHeight = $(this).height(),
                opacity =  0.8 - ((1 - (elementHeight - scrollTop) / elementHeight) * 0.8);
                
            return opacity;
          }
        });
         var checkactive = 0;
         $("li" ).each(function( index ) {
           $(this).hasClass("active");
           checkactive = checkactive;
         });
           
        
           $('.side_nav').css({
             top: function() {
               var elementHeight = $(this).height(),
                  top =   scrollTop + 120;
                  if(top < 650){
                     return top;
                  }
               }
            });
         
      });

      
      $(".insert_form").hide();
      $("#australiadiv").slideUp();
      $("#austdiv").click(function(){
         if (!$(this).hasClass("active")) {
            $(this).addClass('active');
            $(this).siblings().slideUp();
            $(".side_nav").addClass('changepositon');
            $("#australiadiv").slideDown('slow');
            $('html, body').animate({
                 scrollTop: $("#australiadiv").offset().top-80
             }, 1000);
            $(".insert_form").show();
            
         }else{
            $(this).removeClass('active');
            $('html, body').animate({ scrollTop: 0 }, 'slow');
            $(this).siblings().slideDown('slow');
             $("#australiadiv").slideUp();
             $(".insert_form").hide();

         }
      })

      $("#canadadiv").slideUp();
         $("#candiv").click(function(){
            if (!$(this).hasClass("active")) {
               $(this).addClass('active');
               $(this).siblings().slideUp();
               $(".side_nav").addClass('changepositon');
               $("#canadadiv").slideDown('slow');
               $('html, body').animate({
                    scrollTop: $("#canadadiv").offset().top-80
                }, 1000);
               $(".insert_form").show();
               
            }else{
               $(this).removeClass('active');
               $('html, body').animate({ scrollTop: 0 }, 'slow');
               $(this).siblings().slideDown('slow');
               $("#canadadiv").slideUp();
               $(".insert_form").hide();
            }
         })
      $("#ukeuropediv").slideUp();
         $("#ukeurope").click(function(){
            if (!$(this).hasClass("active")) {
               $(this).addClass('active');
               $(this).siblings().slideUp();
               $(".side_nav").addClass('changepositon');
               $("#ukeuropediv").slideDown('slow');
               $('html, body').animate({
                    scrollTop: $("#ukeuropediv").offset().top-80
                }, 1000);
               $(".insert_form").show();
               
            }else{
               $(this).removeClass('active');
               $('html, body').animate({ scrollTop: 0 }, 'slow');
               $(this).siblings().slideDown('slow');
               $("#ukeuropediv").slideUp();
               $(".insert_form").hide();
            }
         })
     //  $('.btn-white').click(function(){
     //     $('.boxed-cover').animate({width:700},100);
     //      $(".close-caption-more").show();
     //  })
     // $(".close-caption-more").hide();
     // $(".close-caption-more").click(function(){
     //     $('.boxed-cover').animate({width:310},100);
     //     $(".close-caption-more").hide();
     // })
     
</script>
@endsection