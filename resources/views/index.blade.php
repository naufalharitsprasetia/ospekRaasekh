@extends('home.mainhome')

@section('css')
    <link rel="stylesheet" href="/css/home.css" />
@endsection

@section('content')
    <!-- Hero Start -->
    <div class="hero" id="home">
        {{-- <div class="position-absolute" style="width: 100%" id="marquez">
        </div>
        <script>
            const hero = document.querySelector("#marquez");
            const marq = `<marquee behavior="" direction="" 
            style="color: #c6a477; -webkit-text-stroke:0.05rem white">SELAMAT DATANG DI OSPEK RAASEKH 2024</marquee>`;
            document.addEventListener("DOMContentLoaded", function() {
                setTimeout(function() {
                    hero.innerHTML = marq;
                }, 3000); // Menunggu 1 menit (1 menit = 60000 milidetik)
            });
        </script> --}}
        <div class="logo-ospek-2024">
            <img src="/assets/kain-kiri.png" class="position-absolute" alt=""
                style="height: 91vh; top:0; left:0; width:100%" data-aos="fade-right" data-aos-duration="3000">
            <img src="/assets/kain-kanan.png" class="position-absolute" alt=""
                style="height: 91vh; top:0; right:0; width:100%" data-aos="fade-left" data-aos-duration="3000">
            <img src="/assets/logo-ospek-2024.png" alt="" data-aos="fade-up" data-aos-duration="3000">
        </div>
        <h3 class="title-home" data-aos="fade-up" data-aos-duration="3000">
            Welcome to <br />
            OSPEK RAASEKH 2024
        </h3>
    </div>
    <!-- Hero End -->
    {{-- NAVBAR START --}}
    <nav class="navbar justify-content-center py-0 position-sticky">
        <!-- Menu -->
        <div class="nav-menu d-flex pt-2">
            <ul class="d-flex justify-content-center align-items-center">
                <li><a href="/" id="active">Home</a></li>
                <li><a href="/timeline" id="active">Jadwal</a></li>
                <!-- Logo -->
                <a href="#home" class="logo"><img src="assets/logo-tulisan-raasekh.png" alt="logoku" />
                </a>
                <li><a href="/pembayaran-du" id="active">Lainnya</a></li>
                <li><a href="/kontak-kami" id="active">Kontak Kami</a></li>
            </ul>
        </div>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
    {{-- NAVBAR END --}}

    <!-- About Start -->
    <div class="about-container text-center bg-corak" id="about" style="padding-top: 6rem; ">
        <div class="about-content">
            <h2 class="fw-bold" style="font-size: 3.7rem;font-family: estetik; color: var(--primary)" data-aos="zoom-in"
                data-aos-duration="1000">
                Pengenalan <br> <span style="color:#ae7b41">Ospek RAASEKH 2024</span>
            </h2>
        </div>
        <div class="about-desc px-5 mx-5 pt-4">
            <img src="/assets/bang-raasekh.png" class="floating" alt="" style="width: 50vw" data-aos="fade-up"
                data-aos-duration="1000">
            <p class="pt-4 fs-5 px-5 fw-normal" style="margin: 0 6.5rem"><span class="fw-bolder"
                    style="color: #c6a477;">Ospek
                    RASSEKH
                </span>adalah Orientasi mahasiswa baru dikenal
                juga dengan istilah Orientasi Studi
                dan pengenalan Kampus atau OSPEK. Kegiatan ini bertujuan untuk
                mengenal dan memahami lingkungan kampus sebagai suatu lingkungan
                akademis serta memahami mekanisme yang berlaku didalamnya.
            </p>
        </div>
    </div>
    <!-- About End -->

    <!-- FIlosopi Start -->
    <div class="about-container text-center bg-corak" id="about" style="padding-top: 6rem; ">
        <div class="about-content">
            <h2 class="fw-bold" style="font-size: 3.7rem;font-family: estetik; color: var(--primary)" data-aos="zoom-in"
                data-aos-duration="1000">
                Filosofi Logo & Taglines<br> <span style="color:#ae7b41">OSPEK RAASEKH</span>
            </h2>
        </div>
        <div class="about-desc px-5 mx-5 pb-5">
            <!-- Swiper -->
            <div class="swiper mySwiper" data-aos="fade-up" data-aos-duration="1000">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="floating" src="/assets/filosofi/logo-ospek2.png" />
                    </div>
                    <div class="swiper-slide">
                        <img class="floating" src="/assets/filosofi/logo-ospek3.png" />
                    </div>
                    <div class="swiper-slide">
                        <img class="floating" src="/assets/filosofi/logo-ospek4.png" />
                    </div>
                    <div class="swiper-slide">
                        <img class="floating" src="/assets/filosofi/logo-ospek5.png" />
                    </div>
                    <div class="swiper-slide">
                        <img class="floating" src="/assets/filosofi/logo-ospek6.png" />
                    </div>
                    <div class="swiper-slide">
                        <img class="floating" src="/assets/filosofi/logo-ospek7.png" />
                    </div>
                    <div class="swiper-slide">
                        <img class="floating" src="/assets/filosofi/logo-ospek8.png" />
                    </div>
                    <div class="swiper-slide">
                        <img class="floating" src="/assets/filosofi/tagline.png" />
                    </div>
                    <div class="swiper-slide">
                        <img class="floating" src="/assets/filosofi/intelligent.png" />
                    </div>
                    <div class="swiper-slide">
                        <img class="floating" src="/assets/filosofi/konsisten.png" />
                    </div>
                    <div class="swiper-slide">
                        <img class="floating" src="/assets/filosofi/excellent.png" />
                    </div>
                    <div class="swiper-slide">
                        <img class="floating" src="/assets/filosofi/logo-ospek.png" />
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- Swiper -->

        </div>
    </div>
    <!-- Filosopi End -->
    {{-- NAMA FILOSOFI S --}}
    <div class="about-container text-center bg-corak" id="about" style="padding-top: 2rem; ">
        <div class="about-content">
            <h2 class="fw-bold" style="font-size: 3.7rem;font-family: estetik; color: var(--primary)">
                Filosofi Kata<br> <span style="color:#ae7b41">RAASEKH</span>
            </h2>
        </div>
        <div class="about-desc px-5 mx-5 pb-5" style="text-align: justify">
            <p class="px-5 mx-5">Kata Raasekh diambil dari Bahasa arab (رَاسِخٌ) yang berarti kekokohan, solid,
                dan
                ketahanan
                yang sulit
                dipisahkan. Sifat-sifat tersebut mencirikan sebuah entitas atau objek yang memiliki integritas kuat.
                Kekokohan merujuk pada kemampuan suatu benda untuk menjaga bentuk atau strukturnya dengan kokoh, tanpa
                mengalami deformasi atau kerusakan yang signifikan. Kekokohan sering kali terkait dengan ketahanan terhadap
                tekanan, beban, atau guncangan pada era pecahnya moralitas kehidupan.
                <br><br>
                Sifat "solid" mengacu pada kepadatan dan integritas suatu objek. Objek yang solid cenderung padat dan tidak
                mudah rusak. Mereka memiliki substansi atau materi yang kuat dan tahan lama, sehingga mampu mempertahankan
                bentuk dan fungsi mereka dengan baik.
                <br><br>
                Ketahanan yang sulit dipisahkan mencirikan kemampuan objek atau entitas untuk tetap bersatu dan utuh, bahkan
                dalam situasi atau tekanan yang ekstrim. Hal ini mencerminkan stabilitas dan keteguhan dalam menghadapi
                berbagai tantangan atau pengujian, sehingga tidak mudah terpecah atau terurai. Kekekalan dan kepadatan
                adalah faktor kunci dalam menjaga ketahanan yang sulit dipisahkan.
                <br><br>
                Secara keseluruhan, kekokohan, sifat solid, dan ketahanan yang sulit dipisahkan adalah atribut yang sangat
                dihargai dalam banyak konteks, baik dalam dunia fisik maupun dalam nilai-nilai manusia, karena mereka
                mencerminkan kekuatan, stabilitas, dan ketahanan yang diperlukan untuk menghadapi tantangan dan menjaga
                integritas.
            </p>
        </div>
    </div>
    {{-- NAMA FILOSOFI E --}}
    {{-- swiper js --}}
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="/js/filosopi.js"></script>
    {{-- GSAP --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
    <script>
        // gsap.registerPlugin(TextPlugin);
        // gsap.to('.title-home', {
        //     duration: 7,
        //     delay: 2,
        //     repeat: -1,
        //     text: `Welcome  to <br />
    //     OSPEK RAASEKH 2024`
        // })
    </script>
@endsection
