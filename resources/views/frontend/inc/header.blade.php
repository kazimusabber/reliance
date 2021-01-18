<div class="wrap">
     <div class="container">
        <div class="row">
           <div class="col-md-12">
              <div class="bg-wrap">
                 <div class="row">
                    <div class="col-md-6 d-flex align-items-center topnav">
                          <a href="#"><span class="fa fa-phone mr-1"></span> {{$contacts->phone ?? ''}}</a>
                          <a href="#"><span class="fa fa-paper-plane mr-1"></span> <span class="__cf_email__" data-cfemail="81f8eef4f3e4ece0e8edc1e4ece0e8edafe2eeec">{{$contacts->email ?? ''}}</span></a>
                          @forelse($socialmedia as $socialmediainfo)
                            @if(strtolower($socialmediainfo->name) == "facebook")
                            <a href="{{ $socialmediainfo->id_link ?? ''}}" class="d-flex align-items-center justify-content-center"><span class="fab fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            @endif
                            @if(strtolower($socialmediainfo->name) == "twitter")
                            <a href="{{$socialmediainfo->id_link ?? ''}}" class="d-flex align-items-center justify-content-center"><span class="fab fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            @endif
                            @if(strtolower($socialmediainfo->name) == "instagram")
                            <a href="{{$socialmediainfo->id_link ?? ''}}" class="d-flex align-items-center justify-content-center"><span class="fab fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            @endif
                            @if(strtolower($socialmediainfo->name) == "linkedin")
                            <a href="{{$socialmediainfo->id_link ?? ''}}" class="d-flex align-items-center justify-content-center"><span class="fab fa-linkedin"><i class="sr-only">Linkedin</i></span></a>
                            @endif
                            @empty
                          @endforelse
                    </div>
                    <div class="col-md-6 d-flex justify-content-md-end topnav">
                        <a href="{{ url('registration') }}" class="d-flex align-items-center justify-content-center"> Registration</a>|
                        <a href="{{ url('login') }}" class="d-flex align-items-center justify-content-center"> Login</a>|
                        <a href="{{ url('apply') }}" class="d-flex align-items-center justify-content-center"> Apply Now</a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="margin-bottom:0px;position:sticky;top:0px;">
     <div class="container">
        <a href="index.html">
          <img src="{{asset('images').'/'.$logo->logo_img}}" alt="nothing.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
           <ul class="navbar-nav m-auto">
              <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="{{url('about')}}" class="nav-link">About</a></li>
              <li class="nav-item"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
              <li class="nav-item" style="background-color:#a43c3c;"><a href="{{url('apply')}}" class="nav-link" style="color:white;">Apply Now</a></li>
           </ul>
        </div>
     </div>
</nav>
