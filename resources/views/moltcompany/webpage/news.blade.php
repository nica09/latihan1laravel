<section class="blog py-lg-4 py-md-3 py-sm-3 py-3" id="blog">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3>News & Blog</h3>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  @foreach($mouse as $key)
                  
                  <div class="carousel-item {{ $key->status }}">
                     <div class="row">
                        <div class="col-lg-6 px-0 blog-w3layouts-row text-center">
                           <img src="{{ asset('images') }}/{{ $key->gambar }}" alt="" class="image-fluid">
                        </div>
                        <div class="col-lg-6 news-agile-text ">
                           <p>
                              {{ $key->deskripsi }}
                           </p>
                           <div class="blog-slider-wls mt-3">
                              <h4><a href="#">{{ $key->judul }}</a></h4>
                           </div>
                           <div class="news-date mt-3">
                              <ul>
                                 <li><span class="far fa-calendar-check"></span><a href="#">{{ $key->created_at }}</a></li>
                                 <li><span class="fas fa-tags"></span><a href="#">{{ $key->tags }} Tags</a></li>
                                 <li><span class="far fa-comments"></span><a href="#">{{ $key->komentar }} Comments</a></li>
                              </ul>
                           </div>
                           <div class="outs_more-buttn">
                              <a href="about.html">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               
                  @endforeach
                  
               </div>
               <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon fas fa-angle-double-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon fas fa-angle-double-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </section>