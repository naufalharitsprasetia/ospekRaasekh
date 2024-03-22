@extends('template.main')

@section('css')
    <!-- timeline.css -->
    <link rel="stylesheet" href="css/timeline.css" />
@endsection

@section('content')
    <!-- Timeline Start -->
    <div class="jadwal">

        <div class="title-pembayaran py-4">
            <h1 class="tulisan-terang text-center fw-bolder">Jadwal Kegiatan</h1>
            <h1 class="tulisan-terang text-center fw-bolder">OSPEK 2024</h1>
            <p class="tulisan-terang text-center">
                Yuk pantau terus jadwal kegiatan OSPEK, jangan sampai kelewat ya... | <a
                    href="https://pmb.unida.gontor.ac.id/jadwal-pendaftaran-dan-seleksi/" target="_blank">Timeline Versi
                    PMB</a>
            </p>
        </div>

        <div class="timeline-agenda">

            <div class="timeline-content yudisium-kelas-6" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    {{-- <span class="tag-soon">AKAN DATANG</span> --}}
                </div>

                <div class="date" style="text-align: end;">
                    <span class="date-m">22 Maret 2024</span> <br />
                    <span class="date-h">12 Ramadhan 1445</span>
                </div>
                <p class="desc">Yudisium Siswa Akhir KMI INTEGRATED GENERATION</p>
            </div>

            <div class="timeline-content test" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    <span class="tag-progress">SEDANG BERLANGSUNG</span>
                    {{-- <span class="tag-soon">AKAN DATANG</span> --}}
                </div>

                <div class="date">
                    <span class="date-m">23 Maret - 7 April 2024</span> <br />
                    <span class="date-h">13 Ramadhan - 28 Ramadhan 1445</span>
                </div>
                <p class="desc">
                    Tes TOEFL & TOAFL, Minat Bakat dan Kepribadian (Online)
                </p>
                <a target="_blank"
                    href="https://docs.google.com/forms/d/e/1FAIpQLScyizeVY7hDVJc0AslzH3sk1i_P_XTlS7INXw1i9oaSrxW55A/viewform">-
                    Link Tes Kepribadian</a>
                <a target="_blank"
                    href="https://docs.google.com/forms/d/e/1FAIpQLScyizeVY7hDVJc0AslzH3sk1i_P_XTlS7INXw1i9oaSrxW55A/viewform">-
                    Link Tes Minat Bakat</a>
            </div>

            <div class="timeline-content awal-kedatangan" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    {{-- <span class="tag-progress">SEDANG BERLANGSUNG</span> --}}
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date" style="text-align: end;">
                    <span class="date-m">17 April 2024</span> <br />
                    <span class="date-h">8 Syawwal 1445</span>
                </div>
                <p class="desc">Awal Kedatangan Mahasiswa Baru</p>
            </div>

            <div class="timeline-content verivikasi-dan-kedatangan-akhir" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">18 April 2024</span> <br />
                    <span class="date-h">9 Syawwal 1445</span>
                </div>
                <p class="desc">Verifikasi Awal Dan Akhir Kedatangan Mahasiswa Baru</p>
            </div>

            <div class="timeline-content akhir-verifikasi" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">19 April 2024</span><br />
                    <span class="date-h">10 Syawwal 1445</span>
                </div>
                <p class="desc">
                    Akhir Verifikasi
                </p>
            </div>

            <div class="timeline-content pengarahan-inverview" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">19 April 2024</span><br />
                    <span class="date-h">10 Syawwal 1445</span>
                </div>
                <p class="desc">
                    Pengarahan Interview Prodi dan Ospek
                </p>
            </div>

            <div class="timeline-content interview-prodi" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">20 April 2024</span><br />
                    <span class="date-h">11 Syawwal 1445</span>
                </div>
                <p class="desc">
                    Interview Prodi
                </p>
            </div>

            <div class="timeline-content perfotoan" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">22 April 2024</span><br />
                    <span class="date-h">13 Syawwal 1445</span>
                </div>
                <p class="desc">
                    Perfotoan Bersama Ospek 2024
                </p>
            </div>

            <div class="timeline-content yudisium-prodi" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">23 April 2024</span><br />
                    <span class="date-h">14 Syawwal 1445</span>
                </div>
                <p class="desc">
                    Yudisium Prodi
                </p>
            </div>

            <div class="timeline-content pembukaan-kuliah-umum" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">24 April 2024</span><br />
                    <span class="date-h">15 Syawwal 1445</span>
                </div>
                <p class="desc">
                    Pmebukaan Kuliah Umum - Masa Kuliah Umum
                </p>
            </div>

            <div class="timeline-content kuliah-umum-2" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">25 April 2024</span><br />
                    <span class="date-h">16 Syawwal 1445</span>
                </div>
                <p class="desc">
                    Masa Kuliah Umum
                </p>
            </div>
            <div class="timeline-content kuliah-umum-3" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">27 April 2024</span><br />
                    <span class="date-h">18 Syawwal 1445</span>
                </div>
                <p class="desc">
                    Masa Kuliah Umum
                </p>
            </div>
            <div class="timeline-content kuliah-umum-4" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">28 April 2024</span><br />
                    <span class="date-h">19 Syawwal 1445</span>
                </div>
                <p class="desc">
                    Masa Kuliah Umum
                </p>
            </div>
            <div class="timeline-content kuliah-umum-5" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">29 April 2024</span><br />
                    <span class="date-h">20 Syawwal 1445</span>
                </div>
                <p class="desc">
                    Masa Kuliah Umum
                </p>
            </div>

            <div class="timeline-content akhir-kuliah-umum" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">30 April 2024</span><br />
                    <span class="date-h">21 Syawwal 1445</span>
                </div>
                <p class="desc">
                    Penutupan & Akhir Masa Kuliah Umum
                </p>
            </div>

            <div class="timeline-content malam-keakraban" data-aos="fade-up">
                <div class="tag">
                    {{-- <span class="tag-selesai">SELESAI</span> --}}
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">1 Mei 2024</span><br />
                    <span class="date-h">22 Syawwal 1445</span>
                </div>
                <p class="desc">
                    Malam Keakraban
                </p>
            </div>

        </div>
    </div>
    <!-- Timeline End -->


    <!-- Scroll On Top Start -->
    <button id="scroll-top-button" onclick="scrollToTop()">
        <img src="assets/slide-up.png" alt="up" />
    </button>
    <!-- Scroll On Top End -->

    <!-- Script Scroll Top Start -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    {{-- 
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
    </script> --}}
    <!-- Script Scroll Top End -->
    <script src="js/cekTanggal.js"></script>
@endsection
