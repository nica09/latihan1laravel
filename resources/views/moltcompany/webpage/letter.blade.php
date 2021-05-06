<style type="text/css">
   .img-first-left {
      background: url({{ asset('images') }}/ff1.jpg) no-repeat 0px 0px;
   }

   .img-second-left {
      background: url({{ asset('images') }}/ff2.jpg) no-repeat 0px 0px;
   }
</style>

<section class="py-lg-4 py-md-3 py-sm-3 py-3">
         @foreach ( $berita as $kabarberita )
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
         <div class="title text-center mb-lg-4 mb-md-3 mb-3">
            <h3>{{ $kabarberita->judul_halaman }}</h3>
         </div>
         <div class="mt-lg-4 mt-3 address_mail_footer_grids">
            <div class="news-about-us">
               <form action="#" method="post">
                  <div class=" subscribe-form ">
                     <div class="form-group contact-forms">
                        <input type="email" class="form-control" placeholder="Enter" required="">
                     </div>
                     <div class="text-center click-subscribe">
                        <button type="submit" class="btn click-me">Subscribe</button>
                     </div>
                  </div>
               </form>
               <div class="info-sub-w3 text-center mt-lg-4 mt-3">
                  <h5> {{ $kabarberita->quotes }}
                  </h5>
               </div>
            </div>
         </div>
       </div>
       @endforeach
</section>
      <section class="images-position-grid">
         <div class="container">
            <div class="row imgs-both-side">
               @foreach ( $isiberita as $judulberita )
               <div class="col-lg-6 col-md-6 col-sm-6 {{ $judulberita->style }}">
                  <h5 class="">{{ $judulberita->nama_gambar }}</h5>
               </div>
               @endforeach
            </div>
         </div>
      </section>
