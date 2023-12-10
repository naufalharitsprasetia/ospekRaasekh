@extends('template.main')

@section('css')
    <!-- timeline.css -->
    <link rel="stylesheet" href="css/timeline.css" />
@endsection

@section('content')
    <!-- Timeline Start -->
    <div class="jadwal">
        <div class="jdl-timeline" id="timeline">
            <h3>Jadwal Kegiatan</h3>
            <h3>OSPEK 2024</h3>
            <p>
                Yuk pantau terus jadwal kegiatan OSPEK, jangan sampai kelewat ya...
            </p>
        </div>
        <div class="timeline-agenda">
            <div class="timeline-content test" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">3 - 21 April 2023</span> <br />
                    <span class="date-h">12 Ramadhan - 30 Ramadhan 1444</span>
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

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date" style="text-align: end;">
                    <span class="date-m">6 - 21 April 2023</span> <br />
                    <span class="date-h">15 Ramadhan - 30 Ramadhan 1444</span>
                </div>
                <p class="desc">Pendaftaran Mahasiswa Baru (by Admission System)</p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">6 April - 9 Mei 2023</span> <br />
                    <span class="date-h">15 Ramadhan - 18 Syawwal 1444</span>
                </div>
                <p class="desc">Pembayaran Daftar Ulang</p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">28 - 30 April 2023</span><br />
                    <span class="date-h">7 - 9 Syawwal 1444</span>
                </div>
                <p class="desc">
                    Batas Akhir Kedatangan Mahasiswi Baru Reguler Kampus Mantingan
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">28 - 30 April 2023</span><br />
                    <span class="date-h">7 - 9 Syawwal 1444</span>
                </div>
                <p class="desc">
                    Batas Akhir Kedatangan Mahasiswa Baru Reguler Kampus Siman
                </p>
            </div>

            <div class="timeline-content"data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">30 April 2023</span><br />
                    <span class="date-h">9 Syawwal 1444</span>
                </div>
                <p class="desc">
                    Verifikasi Data Mahasiswi Guru dan Reguler Kampus Mantingan
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">1 Mei 2023</span><br />
                    <span class="date-h">10 Syawwal 1444</span>
                </div>
                <p class="desc">
                    Verifikasi Data Mahasiswa Guru dan Reguler Kampus Siman
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date" style="text-align: end;">
                    <span class="date-m">1 Mei 2023</span><br />
                    <span class="date-h">10 Syawwal 1444</span>
                </div>
                <p class="desc">
                    Upacara Pembukaan Tahun Ajaran Baru & Absensi Disiplin Kampus
                    Mantingan
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!--             <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">2 Mei 2023</span><br />
                    <span class="date-h">11 Syawwal 1444</span>
                </div>
                <p class="desc">
                    Upacara Pembukaan Tahun Ajaran Baru & Absensi Disiplin Kampus Siman
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!--             <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date" style="text-align: end;">
                    <span class="date-m">1 - 3 Mei 2023</span><br />
                    <span class="date-h">10 - 12 Syawwal 1444</span>
                </div>
                <p class="desc">
                    Briefing Kegiatan OSPEK secara Umum (Masa Pra Ospek)
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!--             <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date" style="text-align: end;">
                    <span class="date-m">3 Mei 2023</span><br />
                    <span class="date-h">12 Syawwal 1444</span>
                </div>
                <p class="desc">Interview Prodi Mahasiswa (Siman & Gontor)</p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!--             <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">3 Mei 2023</span><br />
                    <span class="date-h">12 Syawwal 1444</span>
                </div>
                <p class="desc">
                    Interview Prodi Mahasiswi Guru, Reguler dan Mahasiswa Kediri
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!--             <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date" style="text-align: end;">
                    <span class="date-m">4 Mei 2023</span><br />
                    <span class="date-h">13 Syawwal 1444</span>
                </div>
                <p class="desc">Pembukaan OSPEK 2023</p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!--             <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date" style="text-align: end;">
                    <span class="date-m">4 Mei 2023 /</span>
                    <span class="date-h">13 Syawwal 1444 </span><br />
                    <span class="time">07.30 - 09.00</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Landasan Filosofi (Sejarah, Visi, Misi, dan Orientasi)
                    UNIDA Gontor Sebagai Perguruan Tinggi Pesantren
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!--             <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">4 Mei 2023 /</span>
                    <span class="date-h">13 Syawwal 1444 </span><br />
                    <span class="time">09.30 - 11.00</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Penamaan Nilai - Nilai Pesantren Dalam Kehidupan
                    Mahasiswa di UNIDA Gontor
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!--             <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">4 Mei 2023 /</span>
                    <span class="date-h">13 Syawwal 1444</span><br />
                    <span class="time">20.00 - 21.30</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Urgensi Islamisasi Ilmu Kontemporer Sebagai Branding
                    UNIDA Gontor (Islamisasi)
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">5 Mei 2023 /</span>
                    <span class="date-h">14 Syawwal 1444</span><br />
                    <span class="time">20.00 - 21.30</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Pengenalan Program Kreatifitas Mahasiswa (PKM) dan
                    Kiat - Kiat menjadi Mahasiswa yang Kreatif (LP2M)
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">6 Mei 2023 /</span>
                    <span class="date-h">15 Syawwal 1444</span><br />
                    <span class="time">09.00 - 10.30</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Sosialisasi DEMA dan UKM UNIDA Gontor
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">6 Mei 2023 /</span>
                    <span class="date-h">15 Syawwal 1444</span><br />
                    <span class="time">20.00 - 21.30</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Kepondokmodernan Sebagai Kunci Sukses menjadi
                    Mahasiswa di UNIDA Gontor
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">7 Mei 2023 /</span>
                    <span class="date-h">16 Syawwal 1444</span><br />
                    <span class="time">07.00 - 08.30</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Pengenalan Program Angka Kredit Penunjang Akademik
                    (AKPAM) UNIDA Gontor (DKP)
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">7 Mei 2023 /</span>
                    <span class="date-h">16 Syawwal 1444</span><br />
                    <span class="time">09.00 - 10.30</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Pengenalan Pelayanan Administrasi Akademik UNIDA
                    Gontor (BAA)
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">7 Mei 2023 /</span>
                    <span class="date-h">16 Syawwal 1444</span><br />
                    <span class="time">20.00 - 21.30</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Pengenalan Program Pengembangan Bahasa UNIDA Gontor
                    (DPB)
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <span class="tag-selesai">SELESAI</span>
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">8 Mei 2023 /</span>
                    <span class="date-h">17 Syawwal 1444</span><br />
                    <span class="time">07.00 - 08.30</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Eksplorasi E-Book di Masa Digitalisasi (PERPUSTAKAAN)
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <!-- <span class="tag-selesai">SELESAI</span> -->
                    <span class="tag-progress">SEDANG BERLANGSUNG</span>
                    <!-- <span class="tag-soon">AKAN DATANG</span> -->
                </div>

                <div class="date">
                    <span class="date-m">8 Mei 2023 /</span>
                    <span class="date-h">17 Syawwal 1444</span><br />
                    <span class="time">09.00 - 10.30</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Pengenalan Program Tahfidz Serta Pembagian Kartu
                    Hafalan (MQ)
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <!-- <span class="tag-selesai">SELESAI</span> -->
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">8 Mei 2023 /</span>
                    <span class="date-h">17 Syawwal 1444</span><br />
                    <span class="time">20.00 - 21.30</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Pengenalan Layanan Pengembangan Kepribadian, Minat dan
                    Bakat Mahasiswa (SADC)
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <!-- <span class="tag-selesai">SELESAI</span> -->
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">9 Mei 2023 /</span>
                    <span class="date-h">18 Syawwal 1444</span><br />
                    <span class="time">07.00 - 08.30</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Teknik Dasar dalam Berdiskusi dan Berdebat
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <!-- <span class="tag-selesai">SELESAI</span> -->
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">9 Mei 2023 /</span>
                    <span class="date-h">18 Syawwal 1444</span><br />
                    <span class="time">09.00 - 10.30</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Jurus Ampuh Menjadi Mahasiswa Berprestasi dan Lolos
                    Pilmapres Tingkat Nasional (PILMAPRES)
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <!-- <span class="tag-selesai">SELESAI</span> -->
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">9 Mei 2023 /</span>
                    <span class="date-h">18 Syawwal 1444</span><br />
                    <span class="time">20.00 - 21.30</span>
                </div>
                <p class="desc">
                    Kuliah Umum - Teknik Dasar Dalam Penulisan Karya Ilmiah
                </p>
            </div>

            <div class="timeline-content" data-aos="fade-up">
                <div class="tag">
                    <!-- <span class="tag-selesai">SELESAI</span> -->
                    <!-- <span class="tag-progress">SEDANG BERLANGSUNG</span> -->
                    <span class="tag-soon">AKAN DATANG</span>
                </div>

                <div class="date">
                    <span class="date-m">10 Mei 2023 /</span>
                    <span class="date-h">19 Syawwal 1444</span><br />
                    <span class="time">20.00 - 22.30</span>
                </div>
                <p class="desc">
                    Malam Keakraban dan <br />
                    Penutupan OSPEK 2023
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
    <script src="js/cekTanggal.js"></script>
@endsection
