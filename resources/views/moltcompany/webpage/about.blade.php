      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
         <div class="row abt-colm">
            <div class="col-lg-6 agile-info-img">
               <div class="row stats-info mb-lg-4 mb-3 text-center">
                  @foreach ( $awards as $award )
                  <div class="col-md-4 col-sm-4 stats-grid-2">
                     <div class=" stats-grid">
                        <div class="counter">{{ $award->counter }}</div>
                        <div class="stat-info">
                           <h5 class="pt-2">{{ $award->judul }}</h5>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               @foreach( $videos as $video )
               <div class="video-left-w3l" id="video">
               		<iframe width="560" height="315" src="{{ $video->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
                @endforeach
               </div>
            <div class="col-lg-6 agile-abt-info">
               @foreach( $videos as $video )
               <div class="info-sub-w3">
                  <h5>{{ $video->judul }}</h5>
               </div>
               <div class="info-sub-w3 mt-3">
                  <p>{{ $video->deskripsi }}</p>
               </div>
                @endforeach
               <div class="outs_more-buttn">
                  <a href="about.html">Read More</a>
               </div>
               
               <div class="arrow mt-lg-4 mt-md-3 mt-3">
                  <ul>
                  	@foreach( $brandlorem as $brands )
                     <li>
                        <span class="fas fa-angle-double-right dog-arrow"></span>
                        <p>{{ $brands->nama_brand }}</p>
                     </li>
                     @endforeach
                  </ul>
               </div>
            </div>
            
         </div>
		 </div>
      </section>