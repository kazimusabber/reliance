@extends('layouts.master')

@section('title')
    Vat Smart
@endsection


@section('mainContent')
<style type="text/css">
    .grid_section{
padding: 10px;
    border: 1px solid #2d2e8c;
    box-shadow: 0px 0px 2px 2px #2d2e8c;
    border-radius: 20px;
    }
</style>
    <section class="breadCrumArea">
       
    </section>
        <section class="sliderArea" data-currentslide="activRev_1">
        <div class="nbr_approved">
            
        <h2>NBR Approved VAT Management Software</h2>
        <hr style="border:2px solid #fff">
        <h1>VAT<span style="color: darkred;">Smart</span>  </h1>
        <h2 class="text-center" style="color: #fff;">VAT Software</h2>
        <h3>by Allied Information Technology Limited</h3>
        </div>
       <img src="{!! asset('/images/ss-main-banner.jpg') !!}" class="banner_image">
    </section>

         <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 vat_smart_banner" style="margin-bottom: 8px;">
                    <h2 style="margin: 30px;color:#2d2e8c;">NBR Approved VAT Management Software by Allied Information Technology Limited </h5>
                        <div class="col-lg-12 col-sm-12 col-xs-12" style="margin-bottom: 30px;">
                            <div class="grid_section">
                            <h3 style="color:#2d2e8c;font-weight: bold;">About Vat Smart Software</h3>
                            <h6>Application Name is VATSmart 19.1.0.1002 All
                                    Server’s Operating System is Windows Server 2016
                                    Backend Database is Oracle Database 11.2.0.3
                                    VATSmart is a software package that allows
                                    organizations to manage VAT Related business
                                    processes. It is an internet enabled product that can
                                    be managed from a single site. A company can
                                    operate a single data center with a single database.
                                    Each application is licensed separately so companies
                                    can select the combination that is suitable for their
                                    business processes.</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-6" style="margin-bottom: 30px;">
                            <div class="grid_section">
                            <h3 style="color:#2d2e8c;font-weight: bold;">Features</h3>
                            <h6>1. Input-Output Coefficient (former Price Declaration)</h6>
                            <h6>2. General Purchase</h6>
                            <h6>3. Service Purchase</h6>
                            <h6>4. Trade Purchase</h6>
                            <h6>5. Purchase Return / Debit Note</h6>
                            <h6>6. Store Adjustment / Disposal of Unused Materials (RAW Materials)</h6>
                            <h6>7. Store Adjustment / Disposal of Unused Materials (Finished Materials)</h6>
                            <h6>8. Certificate of VDS</h6>
                            <h6>9. Contractual Issue</h6>
                            <h6>10. Sales Invoice</h6>
                            <h6>11. Service Invoice</h6>
                            <h6>12. Sales Return / Credit Note</h6>
                            <h6>13. Treasury Deposit</h6>
                            <h6>14. Removal of Goods for Export</h6>
                            <h6>15. Application for Drawback</h6>
                            <h6>16. RAW / Finished good Transfer </h6>
                        </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-6" style="margin-bottom: 30px;">
                            <div class="grid_section">
                            <h3 style="color:#2d2e8c;font-weight: bold;">Reports</h3>
                            <h6>1. Mushak 4.3 (former 1, 1(KA, KHA, GA, GHA)</h6>
                            <h6>2. Mushak 6.1 (former 16)</h6>
                            <h6>3. Mushak 6.1 (former 16)</h6>
                            <h6>4. Mushak 6.1,6.2,6.2.1</h6>
                            <h6>5. Mushak 6.8 (formar Mushak 12 (KA))</h6>
                            <h6>6. Mushak 27</h6>
                            <h6>7. Mushak 26</h6>
                            <h6>8. Mushak 6.6 (formar Mushak 12 (KHA))</h6>
                            <h6>9. Mushak 6.4 (formar Mushak 11 (GHA))</h6>
                            <h6>10. Mushak 6.3 (formar Mushak 11)</h6>
                            <h6>11. Mushak 6.3 (formar Mushak 11)</h6>
                            <h6>12. Mushak 6.7 (Mushak 12)</h6>
                            <h6>13. Mushak 6 </h6>
                            <h6>14. Mushak 20</h6>
                            <h6>15. Mushak 22</h6>
                            <h6>16. Mushak 6.5 </h6>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <section class="contactArea commonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="contactForm">
                        <h2 class="text-center" style="color: #2C2D89;">Request Schedule and Demo</h2>
                        <form method="post" action="{!! url('contact') !!}" id="unContactForm">
                            {!! csrf_field() !!}
                            <div class="row">
                            <input class="required" type="text" placeholder="Full name" name="con_name">
                            <input class="required" type="email" placeholder="Email address" id="contact_email" name="email_address">
                            </div>
                            <div class="clearfix"></div>

                            <div class="row" style="margin-top: 12px;">
                            <input class="required" type="text" placeholder="Company Name" name="con_name">
                            <input class="required" type="number" placeholder="Phone Number" name="email_address">
                            </div>
                            <div class="clearfix"></div>
                            <div class="row" style="margin-top: 12px;">
                            <input type="text" placeholder="Designation" name="con_name">
                            <input class="required" type="email" placeholder="Country"  name="email_address">
                            </div>
                            <div class="clearfix"></div>
                            <div class="row" style="width: auto;">
                            <textarea class="required" placeholder="Message" name="message"></textarea>
                            </div>
                            <button type="submit" id="unConSubmit">send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection">
        <div class="container">
            <div class="row">
               
            </div>
        </div>
    </section>


    @endsection
