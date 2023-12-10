var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    coverflowEffect: {
        rotate: 0,
        stretch: -120,
        depth: 400,
        modifier: 1,
        slideShadows: false,
    },
    // autoplay: {
    //     delay: 9000,
    //     disableOnInteraction: false,
    // },
    pagination: {
        el: ".swiper-pagination",
        type: "custom",
        // renderBullet: function (index, className) {
        //   return '<span class="' + className + '">' + (index + 1) + "</span>";
        // },
        renderCustom: function (swiper, current, total) {
            if (current == 12) {
                return `<div
                    class="filosopi-text"
                    style="
                      text-align: center;
                      margin: 0 auto;
                      margin-top:1rem;
                      max-width: 60vw;
                      font-weight: bolder;
                      font-family: cursive;
                    ">
                    <h2 style="font-size: 3rem;margin:0 1rem;color:#ae7b41;font-family: estetik;">Raasekh</h2>
                    <p style="font-size:1rem;margin:0 1rem">
                      Ospek RASSEKH adalah Orientasi mahasiswa baru dikenal juga dengan
                      istilah Orientasi Studi dan pengenalan Kampus atau OSPEK. Kegiatan ini
                      bertujuan untuk mengenal dan memahami lingkungan kampus sebagai suatu
                      lingkungan akademis serta memahami mekanisme yang berlaku didalamnya.
                    </p>
                  </div>`;
            } else if (current == 1) {
                return `<div
                      class="filosopi-text"
                      style="
                        text-align: center;
                        margin: 0 auto;
                        margin-top: 1rem;
                        max-width: 60vw;
                        font-weight: bolder;
                        font-family: cursive;
                      ">
                      <h2
                        style="
                          font-size: 3rem;
                          margin: 0 1rem;
                          color: #ae7b41;
                          font-family: estetik;
                        ">
                        Ujung Menara Masjid Gontor
                      </h2>
                      <p style="font-size: 0.8rem; margin: 0 1rem">
                        Melambangkan bahwa al islamu ya’lu wa laa yu’la ‘alaih (islam itu tinggi dan
                        tidak ditinggikan). Begitu juga dengan mahasiswa Universitas Darussalam
                        Gontor, dengan akhlaq karimah, ilmu yang tinggi, serta pengetahuan yang
                        luas, ia diharapkan menjadi mahasiswa yang mampu mengayomi bukan hanya
                        diayomi, menjadi pribadi yang siap memimpin tidak hanya dipimpin
                      </p>
                    </div>`;
            } else if (current == 2) {
                return `<div
                      class="filosopi-text"
                      style="
                        text-align: center;
                        margin: 0 auto;
                        margin-top: 1rem;
                        max-width: 80vw;
                        font-weight: bolder;
                        font-family: cursive;
                      ">
                      <h2
                        style="
                          font-size: 2.4rem;
                          margin: 0 1rem;
                          color: #ae7b41;
                          font-family: estetik;
                        ">
                        Dua Panji Pondok Modern Darussalam Gontor
                      </h2>
                      <p style="font-size: 0.8rem; margin: 0 1rem">
                        Panji pondok modern Darussalam Gontor melambangkan peradaban utama Pondok
                        Modern Darussalam Gontor yang selalu menyertai perjalanan mahasiswa dalam
                        mengemban amanah. Dengan berpegang teguh terhadap al-qur’an dan hadis,
                        mahasiswa Universitas Darussalam Gontor dapat menjadi uswatun hasanah, yang
                        memiliki identitas dan potensi dalam memberikan Cahaya terhadap Masyarakat
                        I’la an li kalimatillah.
                      </p>
                    </div>`;
            } else if (current == 3) {
                return `<div
                  class="filosopi-text"
                  style="
                    text-align: center;
                    margin: 0 auto;
                    margin-top: 1rem;
                    max-width: 60vw;
                    font-weight: bolder;
                    font-family: cursive;
                  ">
                  <h2
                    style="
                      font-size: 3rem;
                      margin: 0 1rem;
                      color: #ae7b41;
                      font-family: estetik;
                    ">
                    Satu Titik
                  </h2>
                  <p style="font-size: 0.8rem; margin: 0 1rem">
                    Melambangkan kesatuan mahasiswa yang saling bahu membahu untuk mencapai satu
                    tujuan yang sama, berlandaskan Tauhid kepada Allah semata tanpa
                    menyekutukannya.
                  </p>
                </div>`;
            } else if (current == 4) {
                return `<div
              class="filosopi-text"
              style="
                text-align: center;
                margin: 0 auto;
                margin-top: 1rem;
                max-width: 60vw;
                font-weight: bolder;
                font-family: cursive;
              ">
              <h2
                style="
                  font-size: 3rem;
                  margin: 0 1rem;
                  color: #ae7b41;
                  font-family: estetik;
                ">
                Bentuk Ellipse
              </h2>
              <p style="font-size: 0.8rem; margin: 0 1rem">
                Merupakan simbol kekokohan, kesolidan, dan kesatuan. Dengan berpegang teguh
                pada nilai-nilai pondok yang pakem dan solid, para mahasiswa diharapkan
                mampu menjaga keberlangsungan dan keberlanjutan Pendidikan dan pengajaran
                gontor. Didasari pengetahuan yang luas, inovasi tanpa batas, serta
                intelektualitas yang tak terbatas.
              </p>
            </div>`;
            } else if (current == 5) {
                return `<div
                    class="filosopi-text"
                    style="
                      text-align: center;
                      margin: 0 auto;
                      margin-top: 1rem;
                      max-width: 60vw;
                      font-weight: bolder;
                      font-family: cursive;
                    ">
                    <h2
                      style="
                        font-size: 3rem;
                        margin: 0 1rem;
                        color: #ae7b41;
                        font-family: estetik;
                      ">
                      Dua Garis Emas
                    </h2>
                    <p style="font-size: 0.8rem; margin: 0 1rem">
                      Merupakan symbol keseimbangan nan harmoni. Melambangkan dua Bahasa yang
                      digunakan dalam alam Pendidikan gontor, yaitu Bahasa arab dan Bahasa inggris
                      sebagai dasar dalam pelaksanaan syariat mahasiswa (membaca, menulis, dan
                      diskusi).
                    </p>
                  </div>`;
            } else if (current == 6) {
                return `<div
                      class="filosopi-text"
                      style="
                        text-align: center;
                        margin: 0 auto;
                        margin-top: 1rem;
                        max-width: 80vw;
                        font-weight: bolder;
                        font-family: cursive;
                      ">
                      <h2
                        style="
                          font-size: 3rem;
                          margin: 0 1rem;
                          color: #ae7b41;
                          font-family: estetik;
                        ">
                        Enam Garis Emas yang Menguncup
                      </h2>
                      <p style="font-size: 0.8rem; margin: 0 1rem">
                        Melambangkan enam rukun iman yang tertanam dalam hati muslim al mu’min.
                        Dengan iman yang kokoh, hati yang tenang, serta pikiran yang jernih
                        mahasiswa diharapkan dapat menanamkan rasa welas asih yang menciptakan sikap
                        kebijaksanaan dalam diri, namun tetap memberikan kekuatan dan pengaruh
                        positif terhadap masyarakat.
                      </p>
                    </div>`;
            } else if (current == 7) {
                return `<div
                      class="filosopi-text"
                      style="
                        text-align: center;
                        margin: 0 auto;
                        margin-top: 1rem;
                        max-width: 87vw;
                        font-weight: bolder;
                        font-family: cursive;
                      ">
                      <h2
                        style="
                          font-size: 2.5rem;
                          margin: 0 1rem;
                          color: #ae7b41;
                          font-family: estetik;
                        ">
                        Kata Raasekh yang Berbentuk Bunga Siap Mekar
                      </h2>
                      <p style="font-size: 0.8rem; margin: 0 1rem">
                        Bunga yang siap mekar, melambangkan bahwa mahasiswa/i UNIDA Gontor siap
                        dalam bertumbuh, berproses, dan membangun peradaban utama. Menjadi Ummatan
                        Wasathan, serta Agent of Changes yaitu membawa perubahan dunia dengan
                        menanamkan nilai-nilai Islami di dalamnya.
                      </p>
                    </div>`;
            } else if (current == 8) {
                return `<div
                      class="filosopi-text"
                      style="
                        text-align: center;
                        margin: 0 auto;
                        margin-top: 1rem;
                        max-width: 87vw;
                        font-weight: bolder;
                        font-family: cursive;
                      ">
                      <h2
                        style="
                          font-size: 2.7rem;
                          margin: 0 1rem;
                          color: #ae7b41;
                          font-family: estetik;
                        ">
                        Intelligent Consistent Excellent
                      </h2>
                      <p style="font-size: 0.8rem; margin: 0 1rem">
                      Membentuk mahasiswa yang good at learning (pandai dalam belajar) dimana ia mampu menemukan hikmah dari ilmu yang diperoleh, mengamalkannya secara konsisten, sehingga dapat mencetuskan hasil dari sebuah pemikiran dengan daya cipta yang bernilai sempurna, berarti, dan menginspirasi 
                      </p>
                    </div>`;
            } else if (current == 9) {
                return `<div
                      class="filosopi-text"
                      style="
                        text-align: center;
                        margin: 0 auto;
                        margin-top: 1rem;
                        max-width: 87vw;
                        font-weight: bolder;
                        font-family: cursive;
                      ">
                      <h2
                        style="
                          font-size: 2.9rem;
                          margin: 0 1rem;
                          color: #ae7b41;
                          font-family: estetik;
                        ">
                        Intelligent (Hikmah)
                      </h2>
                      <p style="font-size: 0.8rem; margin: 0 1rem">
                      Hikmah merupakan ilmu yang bermanfaat dan amal shaleh, kebenaran dalam perbuatan dan perkataan, mengetahui kebenaran dan mengamalkannya. Sinonim dari kata tersebut adalah kearifan, kebijakan dan kecerdasan. Dalam Bahasa inggris, kecerdasan  berarti intelligent. 
                      </p>
                    </div>`;
            } else if (current == 10) {
                return `<div
                      class="filosopi-text"
                      style="
                        text-align: center;
                        margin: 0 auto;
                        margin-top: 1rem;
                        max-width: 87vw;
                        font-weight: bolder;
                        font-family: cursive;
                      ">
                      <h2
                        style="
                          font-size: 2.9rem;
                          margin: 0 1rem;
                          color: #ae7b41;
                          font-family: estetik;
                        ">
                        Consistent (Konsisten)
                      </h2>
                      <p style="font-size: 0.8rem; margin: 0 1rem">
                      Konsisten memiliki arti tetap (tidak berubah-ubah), selaras dan sesuai. Kata ini berasal dari Bahasa inggris, consistent yang berarti kokoh atau berdiri tegak. Untuk itu, konsisten dapat diartikan sebagai sikap dan perbuatan yang tidak berubah-ubah, selalu selaras.
                      </p>
                    </div>`;
            } else if (current == 11) {
                return `<div
                      class="filosopi-text"
                      style="
                        text-align: center;
                        margin: 0 auto;
                        margin-top: 1rem;
                        max-width: 87vw;
                        font-weight: bolder;
                        font-family: cursive;
                      ">
                      <h2
                        style="
                          font-size: 2.9rem;
                          margin: 0 1rem;
                          color: #ae7b41;
                          font-family: estetik;
                        ">
                       Excellent (Unggul)
                      </h2>
                      <p style="font-size: 0.8rem; margin: 0 1rem">
                      Dalam Kamus Besar Bahasa Indonesia kata unggul memiliki dua arti, pertama sebagai kata sifat yang berarti “lebih tinggi” (pandai, baik, cakap, kuat). Kedua sebagai kata kerja yang menunjukkan “menang”. Dalam kamus oxford excellent is extremely good, yang artinya sangat baik. Dengan kata lain, unggul merupakan derajat tertinggi dari sifat baik.
                      </p>
                    </div>`;
            }
            return current + " of " + total;
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
// Load Swiper setelah gambar dimuat
window.onload = function () {
    swiper.update();
};
