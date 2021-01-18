@extends('frontend.layout.master')
@section('title','Gellary')
@section('content')
<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs sec-spacer sec-color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="breadcrumbs-inner">
                                <h1 class="page-title">Galary</h1>
                                <ul>
                                    <li>
                                        <a class="active" href="{!!  url('/') !!}">Home</a>
                                    </li>
                                    <li>Galary</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->
            
            <!-- Team Start -->
            <section id="rs-team" class="rs-team team-pages pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <!-- Style 1 Start -->
                        @forelse($posts as $key=>$post)
                        <div class="col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="row grid-style-1">
                                    <div class="team-item-wrap">
                                        <div class="team-img">
                                            <a href="#"><img src="{{url('/')}}/images/{!! $post->post_img ?? '' !!}" class="img_team" alt="William Johnson"></a>
                                            
                                        </div>
                                        <div class="team-content">
                                            <div class="overly-border"></div>
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                <div class="normal-text">
                                                <h4 class="team-name">
                                                    <a href="#">{!! $post->title ?? '' !!}</a>
                                                </h4>
                                                <span class="subtitle">{!! $post->post_type ?? '' !!}</span>                        
                                            </div>            
                                                    
                                                    {!! $post->description ?? '' !!}
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Style 2 End -->
                        </div>
                        @empty
                        @endforelse
                        
                       
                           
                    </div>
                    <div class="row text-center">
                 {{ $posts->links() }}
               </div>
                </div>
            </section>
            <!-- Team end -->
            
        </div>
        <!-- Main content End -->
@endsection