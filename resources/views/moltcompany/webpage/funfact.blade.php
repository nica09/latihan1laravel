<section class="fun-facts py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
         <div class="row">
            @foreach ($funfacts as $fun )
            <div class="col-lg-4 funt-list-grids">
               <div class="row">
                  <div class="col-md-4 col-sm-4 col-4 funt-agile-grids text-right">
                     <h6>{{ $fun->nomor }}</h6>
                  </div>
                  <div class="col-md-8 col-sm-8 col-8 funt-agile-text text-left">
                     <h4 class="mb-3">{{ $fun->judul }}</h4>
                     <p>{{ $fun->deskripsi }}</p>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
		 </div>
      </section>