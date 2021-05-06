<section class="service py-lg-4 py-md-3 py-sm-3 py-3" id="service">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
         <div class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
            <h3>Services & Products</h3>
         </div>
         <div class="row text-center">
            @foreach ($service as $serv)
            <div class="col-md-4 col-sm-6 service-list-grid" style="margin-bottom: 3rem;">
               <div class="serv-w3l-grid">
                  <span class="fab fa-gripfire"></span>
               </div>
               <h4 class="my-3">{{ $serv->judul }}</h4>
               <p>{{ $serv->deskripsi }}</p>
            </div>
            @endforeach
         </div>
		  </div>
      </section>