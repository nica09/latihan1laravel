<footer class="buttom-footer py-lg-4 py-md-3 py-sm-3 py-3">
         <section>
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
               <div class="">
                  <div class="row footer-agile-grids ">
                     <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
                        <h4 class="pb-lg-3 pb-3">Follow Us</h4>
                        <div class="footer-icons">
                           <ul>
                               @foreach ( $isinavlink as $linknav)
                              <li class="mb-2">
                                 <a href="#"><span class="">
                                    <img src="{{ asset('images') }}/{{ $linknav->icon }}" style="width: 14px;">
                                 </span></a>
                                 <h6 class="ml-3 text-left">{{ $linknav->linkfollow}}</h6>
                              </li>
                              @endforeach
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
                        <h4 class="pb-lg-3 pb-3">Nav Links</h4>
                        <nav class="border-line">
                           <ul class="nav flex-column">
                              @foreach ( $isinavlink as $linknav)
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html">{{ $linknav->navbarlink}} <span class="sr-only">(current)</span></a>
                              </li>
                              @endforeach
                           </ul>
                        </nav>
                     </div>
                     <div class="wthree-left-right col-lg-4 col-md-4 col-sm-12">
                        <h4 class="pb-lg-3 pb-3">Get In Touch</h4>
                        <div class="wls-hours-list">
                           <ul>
                              @foreach ( $isijadwal as $jadwalaja )
                              <li class="d-flex">{{ $jadwalaja->jadwal }}
                                 
                                    @if($jadwalaja->waktu == NULL) 
                                      <span class="time ml-auto">CLOSE</span>
                                    @else
                                       <span class="time ml-auto">{{ $jadwalaja->waktu }}-{{ $jadwalaja->waktu2 }}</span>
                                    @endif
                                 </li>
                            
                              @endforeach
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="copy-agile-right text-center">
            <p>© 2018 Molten. All Rights Reserved</p>
         </div>
      </footer>