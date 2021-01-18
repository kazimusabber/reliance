

<style type="text/css">
    .hyper-pricing .single-pricing-package .package-type p {
    margin-bottom: 0;
    font-size: 20px;
    color: #2C2D89;
    font-weight: 700;
}
.hyper-pricing .single-pricing-package .pricing-feature-wrap h6 {
    font-size: 18px;
    margin-bottom: 0;
    color: #14771B;
    font-weight: bold;
}
.hyper-pricing .single-pricing-package .pricing-feature-wrap .pricing-feature-list li {
    font-size: 14px;
    position: relative;
    display: flex;
    align-items: center;
    color: #2C2D89;
    font-weight: bold;
}
.hyper-pricing .single-pricing-package .pricing-feature-wrap h6 {
    font-size: 18px;
    margin-bottom: 0;
    color: #01A8EA;
    font-weight: bold;
}
.hyper-pricing .single-pricing-package .pricing-feature-wrap .pricing-feature-list li i {
    font-size: 10px;
    line-height: 10px;
    color: #01A8EA;
    margin-right: 5px;
}

</style>
<header class="headerArea">
   @foreach($logos as $logo)
    <div class="logo pull-left">
        <div class="">
            <a href="{!! url('/') !!}"><img style="width: auto; height:52px; position: relative; top: -16px;" src="{!! asset('images/'.$logo->logo_img) !!}" alt=""></a>
        </div>
        <h2><a href="{!! url('/') !!}"></a></h2>
    </div>
    @endforeach

    <nav class="mainMenu pull-left">
        <div class="menuButton hidden-lg hidden-md">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li class=" <?php if($_SERVER['REQUEST_URI'] =='/'){echo "active";} ?>" >
                <a href="{!! url('/') !!}" style="font-size: 15px;">Home</a>
            </li>

            <li class="<?php if($_SERVER['REQUEST_URI'] =='/about'){echo "active";} ?>">
              <a href="{!! url('about') !!}" style="font-size: 15px;">About Us</a>
            </li>

            <!-- <li class=" <?php if($_SERVER['REQUEST_URI'] =='/products'){echo "active";} ?>">
                <a href="{!! url('products') !!}" style="font-size: 15px;">Products</a>
            </li> -->

           <!--  <li class=" <?php if($_SERVER['REQUEST_URI'] =='/service'){echo "active";} ?>">
               <a href="{!! url('service') !!}" style="font-size: 15px;">Services</a>
           </li> -->

           <!--  <li class="<?php if($_SERVER['REQUEST_URI'] =='/hosting'){echo "active";} ?>">
             <a href="{!! url('hosting') !!}" style="font-size: 15px;">Hosting</a>
           </li> -->

            <li class="<?php if($_SERVER['REQUEST_URI'] =='/contact'){echo "active";} ?>">
              <a href="{!! url('contact') !!}" style="font-size: 15px;">Contact Us</a>
            </li>
            <!-- <li class="<?php if($_SERVER['REQUEST_URI'] =='/vat-smart'){echo "active";} ?>"><a href="{!! url('vat-smart') !!}" style="font-size: 15px;*/
    background: darkred;
    color: #fff">VAT SMART</a></li> -->
        </ul>
    </nav>
    <div class="topSocial pull-right">
        <ul>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a style="background: #339AF0" href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
    <div class="clearfix"></div>
</header>
