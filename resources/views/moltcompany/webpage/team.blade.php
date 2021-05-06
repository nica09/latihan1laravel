 <section class="team py-lg-4 py-md-3 py-sm-3 py-3" id="team">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3>Team Members</h3>
            </div>
            <div class="row">
               @foreach ( $teams as $member )
               <div class="col-lg-3 col-md-6 col-sm-6 team-list-team">
                  <div class="team-member">
                     <div class="team-img">
                        <img src="{{ asset('images') }}/{{ $member->gambar }}" alt="" class="image-fluid">
                     </div>
                     <div class="team-hover">
                        <div class="desk">
                           <h4 class="mb-2">{{ $member->nama }}</h4>
                           <p>{{ $member->deskripsi }}</p>
                        </div>
                        <div class="s-link">
                           <ul>
                              <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                              <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                              <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="team-title">
                     <h5>{{ $member->nama }}</h5>
                     <span>{{ $member->jabatan }}</span>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </section>