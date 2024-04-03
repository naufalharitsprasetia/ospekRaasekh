  <!-- Footer Start -->
  <footer>
      <div class="footer">
          <div class="footer-container">
              <div class="footer-left">
                  <div class="footer-logo">
                      <img src="assets/logo-tulisan-raasekh.png" alt="footer-logo" />
                  </div>

                  <div class="contact-info-footer">
                      <div class="jdl-contact-info">
                          <h3></h3>
                      </div>
                      <div class="content-contact">
                          <div class="content-contact-alamat">
                              <i class="bi bi-geo-alt-fill"></i>
                              <p>
                                  Jl. Raya Siman, Demangan - Siman - Ponorogo, Jawa Timur
                                  63471
                              </p>
                          </div>
                          <div class="content-contact-telp">
                              <i class="bi bi-telephone-fill"></i>
                              <p>(0352) 483762</p>
                          </div>
                          <div class="content-contact-email">
                              <i class="bi bi-envelope-fill"></i>
                              <p>pmb@unida.gontor.ac.id</p>
                          </div>
                          <div class="content-contact-website mt-2">
                              <i class="bi bi-browser-chrome"></i>
                              <a href="https://pmb.unida.gontor.ac.id/" target="_blank" class="text-white ms-2">
                                  https://pmb.unida.gontor.ac.id/</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="footer-center">
                  <p>Social Media</p>
                  <div class="social-media">
                      <div class="ig">
                          <a href="https://www.instagram.com/ospek.2024/" target="_blank"><img src="assets/ig.png"
                                  alt="" /></a>
                      </div>
                      <div class="in">
                          <a href="https://www.linkedin.com/school/universitas-darussalam-gontor/" target="_blank"><img
                                  src="assets/in.png" alt="" /></a>
                      </div>
                      <div class="fb">
                          <a href="https://www.facebook.com/Universitas.Darussalam.Gontor/" target="_blank"><img
                                  src="assets/fb.png" alt="" /></a>
                      </div>
                      <div class="yt">
                          <a href="https://www.youtube.com/@ospekunida5252" target="_blank"><img src="assets/yt.png"
                                  alt="" /></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- Footer End -->

  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  {{-- Own JS --}}
  <script src="/js/script.js"></script>
  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>

  {{--  --}}
  <script src="/js/navbar.js"></script>
  <script src="/js/home.js"></script>
  <!-- Script Scroll Top Start -->
  <script>
      const scrollToTopButton = document.getElementById("scroll-top-button");

      window.addEventListener("scroll", () => {
          if (window.pageYOffset > 100) {
              scrollToTopButton.style.display = "block";
          } else {
              scrollToTopButton.style.display = "none";
          }
      });

      scrollToTopButton.addEventListener("click", () => {
          window.scrollTo({
              top: 0,
              behavior: "smooth"
          });
      });
  </script>
  <!-- Script Scroll Top End -->
  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
      AOS.init();
  </script>
  <!-- AOS END -->
  </body>
