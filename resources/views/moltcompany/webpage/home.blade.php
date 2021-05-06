@extends('moltcompany.layout.app')
@section('content')
   <body>
      <div class="header-outs" id="header">
         <!--banner -->
         <div class="header-most-top">
            <div class="one-headder">
               <div class="container-fluid">
                  <div class="row left-indus-icons RWDpagescrollfix">
                     <div class="col-lg-5 col-md-5 col-sm-4 pr-0 icons">
                        <ul>
                           <li>
                              <h4> Follow Us:</h4>
                           </li>
                           <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                           <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                           <li><a href="#"><span class="fas fa-rss"></span></a></li>
                           @foreach ($isiemail as $emailisi)
                           <li>
                              <a href="https://twitter.com">
                                 <span>
                                    <img src="{{ asset('images') }}/{{ $emailisi->Set_webicon }}" style="width: 14px;">
                                 </span>
                              </a>
                           </li>
                           @endforeach
                        </ul>
                     </div>
                     <div class="col-lg-7 col-md-7 col-sm-8 agile-email-call ">
                        <ul>
                           <li>
                              <h4>Call Us:</h4>
                           </li>
                           @foreach ($isiemail as $emailisi)
                           <li>
                              <p>{{ $emailisi->Set_webphone}}</p>
                           </li>
                           <li >
                              <h4>Email Us:</h4>
                           </li>
                           <li>
                              <p><a href="https://www.google.com">{{ $emailisi->Set_webemail}}</a></p>
                           </li>
                           @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="headder-nav-icon pagescrollfix">
               <div class="container-fluid">
                  <div class="nav-headder-top">
                     <!--//navigation section -->
                     <nav class="navbar navbar-expand-lg navbar-light pagescrollfix">
                        <div class="hedder-up">
                           <h1><a class="navbar-brand" href="index.html"><span class="fas fa-cogs"></span>molten</a></h1>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                           <ul class="navbar-nav ">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                 <a href="about.html" class="nav-link">About</a>
                              </li>
                              <li class="nav-item">
                                 <a href="service.html" class="nav-link">Service</a>
                              </li>
                              <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Pages
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="nav-link " href="typography.html">Typography</a>
                                    <a class="nav-link " href="gallery.html">Gallery</a>
                                 </div>
                              </li>
                              <li class="nav-item">
                                 <a href="contact.html" class="nav-link">Contact</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="clearfix"> </div>
               </div>
            </div>
         </div>
         <!-- //Navigation -->
         <!-- Slideshow 4 -->
         <style>
            @media only screen and (max-width: 550px) {
               

               .gambar-banner {
                  height: 723px;
               }
            }
         </style>
         <div class="slider slider-mobile">
            <div class="callbacks_container">
               <ul class="rslides" id="slider4">
                  @foreach( $content as $selir )
                  <li>
                     <div class="slider-img">
                        <img class="gambar-banner" src="{{ asset('images') }}/{{ $selir->Gambar_slider }}">
                        <div class="container">
                           <div class="slider-info" style="position: absolute; z-index: 3;">
                              <h5 name="Title" class="">{{ $selir->Title }}</h5>
                              <div class="bottom-info">
                                 <p name="Deskripsi">{{ $selir->Deskripsi }}</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  @endforeach
                  </form>
               </ul>
               </form>
            </div>
            <!-- This is here just to demonstrate the callbacks -->
            <!-- <ul class="events">
               <li>Example 4 callback events</li>
               </ul>-->
            <div class="clearfix"></div>
         </div>
      </div>
      <!-- //banner -->
      <!-- about -->
      @include('moltcompany.webpage.about')
      <!--//about-->
      <!--Fun-facts-->
      @include('moltcompany.webpage.funfact')
      <!--//Fun-facts-->
      <!--services-->
      @include('moltcompany.webpage.service')
      <!--//services-->
      <!--comments-->
      <section class="comments py-lg-4 py-md-3 py-sm-3 py-3" style="margin-top: -60px;">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="fun-hedder-up">
               <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h6>
            </div>
         </div>
      </section>
      <!--//comments--> 
      <!--Blog -->			  
      @include('moltcompany.webpage.news')
      <!--//Blog -->
      <!--comments-->
      <section class="comments py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="fun-hedder-up">
               <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h6>
            </div>
         </div>
      </section>
      <!--//comments-->
      <!--team-->
      @include('moltcompany.webpage.team')
      <!--//team-->
      <!--comments-->
      <section class="comments py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="fun-hedder-up">
               <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h2>
            </div>
         </div>
      </section>
      <!--//comments-->
       @include('moltcompany.webpage.letter')

       @include('moltcompany.webpage.jadwal')
@endsection