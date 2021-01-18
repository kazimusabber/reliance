<style>
    .example_allied {
        border: 2px solid #4B9694;
        padding: 10px;
        border-radius: 25px;
        background-color: #4B9694;
    }
    .footerContent h3,.footerContent h2{

    }
    .border_box{
        border: 1px solid #fff;
        border-radius: 5px;
    padding: 10px;
    box-sizing: border-box;
    box-shadow: 0px 0px 3px 3px #ffffff
    }
</style>

<footer class="footerArea">
     <section class="footerTop" style="padding: 20px;
    background: #020a3a;">
    @php
$contactList=\App\Contact::with('getName')->get();

    @endphp
         <div class="container">
             <div class="row">
                 <div class="col-lg-5 col-sm-5 col-xs-5 border_box" >

                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                 <h2 class="text-center" style="color:#fff;">Bangladesh Office</h2>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12 text-center">

                               <h4 style="color:#fff;">{!! $contactList[0]->getName->office_title ?? null  !!}</h4>
                               <h4 style="color:#fff;">{!! $contactList[0]->phone ?? null  !!}</h4>
                                <email style="color:#fff;">{!! $contactList[0]->email ?? null  !!}</email>
                                <address style="color:#fff;">{!! $contactList[0]->location ?? null  !!}</address>

                            </div>
                            
                        </div>
                 </div>
                 <div class="col-lg-2 col-sm-2 col-xs-2"></div>

                 <div class="col-lg-5 col-sm-5 col-xs-5 border_box" >
                     <h2 class="text-center"  style="color:#fff;">International Contact</h2>
                     <div class="col-lg-12 col-sm-12 col-xs-12 text-center">

                               <h4 style="color:#fff;">{!! $contactList[1]->getName->office_title ?? null  !!}</h4>
                               <h4 style="color:#fff;">{!! $contactList[1]->phone ?? null  !!}</h4>
                                <email style="color:#fff;">{!! $contactList[1]->email ?? null  !!}</email>
                                <address style="color:#fff;">{!! $contactList[1]->location ?? null  !!}</address>

                            </div>
                 </div>



             </div>
         </div>

    </section>
@if($_SERVER['REQUEST_URI'] =='/contact')
    <section class="mapArea wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
        <iframe width='100%' height='400px' id='mapcanvas'
                src='https://maps.google.com/maps?q=3,%203%20salimullah%20road,%20mohammadpur,%20Dhaka%20-1207,%20Bnagladesh&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=&amp;output=embed'
                frameborder='0' scrolling='no' marginheight='0' marginwidth='0'>
            <div class='zxos8_gm'><a rel='nofollow' href='https://chestereveningleader.co.uk'>the Leader website</a>
            </div>
            <div style='overflow:hidden;'>
                <div id='gmap_canvas' style='height:300%;width:700px;'></div>
                <div>
                    <small>Powered by <a href='https://www.embedgooglemap.co.uk'>Embed Google Map</a></small>
                </div>
            </div>
        </iframe>
    </section>

@endif

    <section class="copyRight" style=" background: #020a3a;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="300ms">
                    <p>Copyright &copy; <?php echo date('Y');?> by <a href="http://http://modinafashion.com/">modinafashion</a></p>
                </div>
            </div>
        </div>
    </section>
</footer>

<style>
    .application-overview-platforms {
        background: rgba(0, 0, 0, .05);
        height: 92px;
        padding: 0;
        position: relative;
        overflow: hidden;
        transform: translateZ(0);
        box-shadow: 0 -25px 40px hsla(0, 0%, 7%, .12);
        z-index: 1
    }

    .application-overview-platforms-list {
        width: 8000px;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: row;
        flex-direction: row;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        transform: translateZ(0);
        animation: platformsSlideshow 60s linear infinite;
        padding: 0 40px;
        box-sizing: border-box;
    }

    .application-overview-platforms {
        background: rgba(0, 0, 0, .05);
        height: 92px;
        padding: 0;
        position: relative;
        overflow: hidden;
        transform: translateZ(0);
        box-shadow: 0 -25px 40px hsla(0, 0%, 7%, .12);
        z-index: 1;
    }

    .application-overview-platforms-list-item{
        display: inline-flex;
        -ms-flex-pack: center;
        justify-content: center;
        /*opacity: .2;*/
        /*-webkit-filter: brightness(.5) grayscale(1);*/
        /*filter: brightness(.5) grayscale(1);*/
    }


    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-3dcart {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-adobe-muse {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -524px -376px;
        width: 52px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-adobe-muse {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-big-cartel {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -148px -282px;
        width: 145px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-big-cartel {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-bigcommerce {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: 0 -188px;
        width: 153px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-bigcommerce {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-bitrix {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -212px 0;
        width: 174px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-bitrix {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-blogger {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -127px -376px;
        width: 124px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-blogger {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-blogspot {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -524px -423px;
        width: 47px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-blogspot {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-bootstrap {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -576px -376px;
        width: 47px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-bootstrap {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-cratejoy {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -283px -329px;
        width: 101px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-cratejoy {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-cs-cart {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -110px -470px;
        width: 106px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-cs-cart {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-dle {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -212px -47px;
        width: 167px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-dle {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-drupal {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -386px 0;
        width: 138px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-drupal {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-duda {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -524px -94px;
        width: 90px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-duda {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-ecwid {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -386px -329px;
        width: 127px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-ecwid {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-elementor {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -151px -235px;
        width: 148px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-elementor {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-expressionengine {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -524px -188px;
        width: 68px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-expressionengine {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-godaddy {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: 0 -423px;
        width: 120px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-godaddy {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-html {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -374px -376px;
        width: 120px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-html {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-iframe {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -120px -423px;
        width: 116px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-iframe {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-jimdo {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -524px 0;
        width: 101px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-jimdo {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-joomla {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: 0 -282px;
        width: 148px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-joomla {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-jquery {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -352px -423px;
        width: 115px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-jquery {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-lightcms {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -321px -470px;
        width: 101px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-lightcms {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-macaw {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: 0 -470px;
        width: 110px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-macaw {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-lightspeed {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -212px -141px;
        width: 155px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-lightspeed {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-magento {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -386px -47px;
        width: 138px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-magento {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-mobirise {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -524px -329px;
        width: 55px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-mobirise {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-modx {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -386px -282px;
        width: 127px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-modx {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-opencart {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: 0 -329px;
        width: 143px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-opencart {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-optimizepress {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: 0 -94px;
        width: 201px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-optimizepress {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-pinegrow {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -153px -188px;
        width: 153px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-pinegrow {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-pivot {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -524px -141px;
        width: 90px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-pivot {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-shopify {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -386px -188px;
        width: 133px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-shopify {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-sitebuilder {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: 0 -47px;
        width: 205px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-sitebuilder {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-splash {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -216px -470px;
        width: 105px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-splash {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-squarespace {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: 0 -141px;
        width: 187px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-squarespace {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-strikingly {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -386px -94px;
        width: 136px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-strikingly {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-tilda {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -236px -423px;
        width: 116px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-tilda {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-tumblr {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -422px -470px;
        width: 101px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-tumblr {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-ucoz {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -386px -141px;
        width: 136px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-ucoz {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-visual-composer {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: 0 0;
        width: 212px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-visual-composer {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-volusion {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -212px -94px;
        width: 162px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-volusion {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-web {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: 0 -376px;
        width: 127px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-web {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-webflow {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -251px -376px;
        width: 123px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-webflow {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-webnode {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -386px -235px;
        width: 132px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-webnode {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-weebly {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -524px -47px;
        width: 94px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-weebly {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-wix {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -524px -235px;
        width: 67px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-wix {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-wordpress {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: 0 -235px;
        width: 151px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-wordpress {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    .platform-logo-yola {
        background-image: url({!! asset('frontEnd/images/sprite.png') !!});
        background-position: -524px -282px;
        width: 62px;
        height: 47px
    }

    @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
        .platform-logo-yola {
            background-image: url({!! asset('frontEnd/images/sprite%402x.png') !!});
            background-size: 625px 517px
        }
    }

    @keyframes platformsSlideshow {
        to {
            transform: translateX(-3000px)
        }
    }

</style>
