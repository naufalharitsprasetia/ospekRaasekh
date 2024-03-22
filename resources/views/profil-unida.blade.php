@extends('template.main')

@section('css')
    <!-- Kontak Kami CSS -->
    {{-- <link rel="stylesheet" href="css/kontak-kami.css" /> --}}
@endsection

@section('content')
    <!-- Profil Unida Start -->
    <div class="profil background-terang px-4 py-3">
        <div class="breadcrumb"><a href="/lainnya"
                class="text-decoration-none hover-breadcrumb tulisan-gelap fw-bold pe-2">Others </a> / Profil Unida
        </div>
        <div class="title text-center">
            <h1 class="tulisan-gelap text-center fw-bolder">Profil Unida</h1>
        </div>
        <hr>
        <div class="container-fluid profil-content mx-2 my-2 ">
            {{-- Foto --}}
            <div class="ms-4 foto galeri-profil-unida d-flex justify-content-center">
                <div id="carouselExampleSlidesOnly" class="carousel slide mx-2" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/profil-unida/profil1-min.jpg" class="d-block" width="500" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/profil-unida/profil2-min.jpg" class="d-block" width="500" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/profil-unida/profil3-min.JPG" class="d-block" width="500" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/profil-unida/profil4-min.jpg" class="d-block" width="500" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/profil-unida/profil5-min.jpg" class="d-block" width="500" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/profil-unida/profil6-min.jpg" class="d-block" width="500" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/profil-unida/profil7-min.jpg" class="d-block" width="500" alt="...">
                        </div>
                    </div>
                </div>
                <div id="carouselExampleSlidesOnly2" class="carousel slide mx-2" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/profil-unida/profil8-min.jpg" class="d-block" width="500" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/profil-unida/profil9-min.jpg" class="d-block" width="500" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/profil-unida/profil10-min.jpg" class="d-block" width="500" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/profil-unida/profil11-min.jpg" class="d-block" width="500" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="assets/profil-unida/profil12-min.jpg" class="d-block" width="500" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="assets/profil-unida/profil13-min.jpg" class="d-block" width="500" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="assets/profil-unida/profil14-min.jpg" class="d-block" width="500" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Foto --}}

            <hr>
            <h3 class="tulisan-gelap fw-bolder">Universitas Darussalam Gontor</h3>
            <blockquote>Universitas Darussalam (UNIDA) Gontor merupakan perguruan tinggi waqaf yang berada di bawah naungan
                Pondok Modern Darussalam Gontor. oleh sebab itu, dalam melaksanakan Tri Dharmanya, UNIDA Gontor
                mempertahankan visi, misi, dan jiwa pesantren.
                <br><br>
                Sebagai perguruan tinggi pesantren, UNIDA Gontor telah melewati perjalanan institusional yang panjang.
                Didirikan untuk pertama kali pada tahun 1963 dengan nama Institut Pendidikan Darussalam (IPD), kemudian
                berubah menjadi Institut Studi Islam Darussalam (ISID) pada tahun 1994, dan akhirnya menjadi UNIDA Gontor
                pada tahun 2014 melalui Surat Keputusan Menteri Pendidikan Nomor 197/E/O/2014 tentang Izin Pendirian
                Universitas Darussalam Gontor. Selama perjalanan sejarah itu, berbagai prestasi dan kontribusi kepada umat
                Islam, agama, bangsa dan negara telah diberikan, dan akan terus dimaksimalkan.
                <br><br>
                Di samping mempertahankan jiwa-jiwa pesantren, secara akademik, UNIDA Gontor juga memperhatikan kualitas
                keilmuan melalui kurikulum dan framework kajian keislamannya. Selain itu, peningkatan sumber daya manusia
                juga menjadi prioritas, baik melalui pendidikan formal maupun forum-forum ilmiah di dalam maupun luar
                negeri. Di UNIDA Gontor sendiri, Pusat penelitian dan pengembangan (Puslitbang), lembaga penerbitan dan
                publikasi, pusat-pusat studi seperti CIOS, PKU, dan lain-lain merupakan sarana pengembangan intelektual para
                dosen. Kajian-kajian tersebut, ditambah dengan kegiatan-kegiatan akademik dan penunjang akademik lainnya,
                berjalan dengan dinamis dan efektif karena seluruh mahasiswa dan sebagian besar dosen tinggal di sebuah
                kampus yang terpadu.
                <br>
                <a href="https://unida.gontor.ac.id/id/tentang-kami/">Read More ....</a>
            </blockquote>
            <br>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Sejarah
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Universitas Darussalam (UNIDA) Gontor</strong> merupakan perguruan tinggi
                            waqaf yang berada di bawah naungan Pondok Modern Darussalam Gontor. oleh sebab itu, dalam
                            melaksanakan Tri Dharmanya, UNIDA Gontor mempertahankan visi, misi, dan jiwa pesantren.

                            Sebagai perguruan tinggi pesantren, UNIDA Gontor telah melewati perjalanan institusional yang
                            panjang. Didirikan untuk pertama kali pada tahun 1963 dengan nama Institut Pendidikan Darussalam
                            (IPD), kemudian berubah menjadi Institut Studi Islam Darussalam (ISID) pada tahun 1994, dan
                            akhirnya menjadi UNIDA Gontor pada tahun 2014 melalui Surat Keputusan Menteri Pendidikan Nomor
                            197/E/O/2014 tentang Izin Pendirian Universitas Darussalam Gontor. Selama perjalanan sejarah
                            itu, berbagai prestasi dan kontribusi kepada umat Islam, agama, bangsa dan negara telah
                            diberikan, dan akan terus dimaksimalkan.
                            <br><a href="https://unida.gontor.ac.id/en/sejarah/" target="_blank">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Lokasi Unida
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Unida Siman : </strong>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.9308554975364!2d111.49008531437772!3d-7.902292780822469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e790aa79efd972b%3A0xf09ed064954d29b2!2sUNIVERSITY%20OF%20DARUSSALAM%20GONTOR!5e0!3m2!1sen!2sid!4v1635344541528!5m2!1sen!2sid"
                                style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                            <strong class="ms-4">Unida Mantingan : </strong>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.8656415145756!2d111.16916377357299!3d-7.368953172516111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79f968df4e1315%3A0x729de8c1a556c4f3!2sUniversitas%20Darussalam%20Gontor%20-%20Kampus%20Mantingan!5e0!3m2!1sid!2sid!4v1709967461191!5m2!1sid!2sid"
                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Lambang Unida
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Arti Lambang Universitas adalah: </strong>
                            <img src="assets/UNIDA.png" width="120" alt="">
                            <ul class="mt-2" style="list-style-type: disc;">
                                <li>Pintu gerbang melambangkan perjalanan mencapai ilmu pengetahuan. Universitas Darussalam
                                    Gontor adalah “Gerbang Pengetahuan”.
                                </li>
                                <li>Jumlah layer pancuran yang enam melambangkan pondasi 6 rukun iman. Artinya dasar
                                    berpijak memperoleh ilmu pengetahuan adalah keimanan.</li>
                                <li>Jumlah pintu gerbang yang lima melambangkan panca jiwa Yang berarti Universitas
                                    Darussalam Gontor tempat mencetak manusia yang berjiwa keikhlasan, kesederhanaan,
                                    kemandirian, ukhuwwah islamiyyah, kebebasan.</li>
                                <li>Warna biru dan hijau: Warna biru berarti elegan, tegas, luas dan modern; sering
                                    diasosiasikan dengan teknologi & sains. Warna Hijau (toscha) berarti dinamis dan
                                    harmonis serta sering diasosiasikan dengan lingkungan yang ramah dan damai yaitu Islam
                                    (Darussalam). Maka dari gabungan dua warna pada logo menunjukkan integrasi sain
                                    teknologi dan Islam.</li>
                                <li>Makna Logo: Universitas Darussalam Gontor merupakan pintu gerbang pengetahuan menuju
                                    terciptanya manusia-manusia yang memiliki empat karakter berakhlaq mulia, berbadan
                                    sehat, berilmu pengetahuan luas, sehingga dapat berfikiran bebas atau kreatif meletakkan
                                    sesuatu secara proporsional (pada tempatnya) atau adil. Dengan ketinggian akhlak dan
                                    keluasan ilmu pengetahuan yang berdasarkan keimanan itulah seseorang dapat memperoleh
                                    atau mencapai hikmah (wisdom).</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Visi, Misi & Tujuan
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>VISI : </strong> <br>
                            Menjadi Universitas bersistem pesantren yang bermutu dan berarti, sebagai pusat pengembangan
                            ilmu pengetahuan yang berorientasi pada Islamisasi ilmu pengetahuan kontemporer dan sebagai
                            pusat kajian bahasa Al-Qur’an untuk kesejahteraan umat manusia.
                            <br><br>
                            <strong>MISI : </strong> <br>
                            <ul class="mt-2" style="list-style-type: disc;">
                                <li>Menyelenggarakan Pendidikan, Penelitian, dan Pengabdian Kepada Masyarakat dalam kerangka
                                    Islamisasi Ilmu Pengetahuan kontemporer dan pengembangan bahasa Al-Qur’an;
                                </li>
                                <li>Mengebangkan sistem Perguruan Tinggi pesantren sebagai basis kehidupan kampus dalam
                                    rangka mengembangkan berbagai kompetensi yang sesuai dengan tuntutan masyarakat;</li>
                                <li>Membangun kerjasama dengan berbagai pihak di dalam dan di luar negeri dalam rangka
                                    mengembangkan Tri Dharma perguruan tinggi, pengembangan SDM, dan penguatan jaringan
                                    kerja.</li>
                            </ul>
                            <br><br>
                            <strong>TUJUAN : </strong> <br>
                            <ul class="mt-2" style="list-style-type: disc;">
                                <li>Terselenggaranya Pendidikan, Penelitian, dan Pengabdian Kepada Masyarakat dalam kerangka
                                    Islamisasi Ilmu Pengetahuan kontemporer dan pengembangan bahasa Al-Qur’an;
                                </li>
                                <li>Dihasilkannya insan yang beriman, berakhlaq mulia, berpengetahuan luas, berfikiran
                                    kreatif, menguasai 15 kompetensi dasar yang meliputi: Creativity and Innovation,
                                    Analytical thinking, Cognitive Flexibility, Critical Thinking, Complex Problem Solving,
                                    Discipline and Moral Consciousness, Sincerity and Service Orientation, Islamic
                                    Brotherhood, Social Commitment, Emotional Intelligent, Coordinating with others,
                                    Negotiation, Judgment and Decision making, Leadership and Social Influence, dan
                                    Self-Reliance yang mampu mengamalkan ilmunya secara kreatif, inovatif dan profesional,
                                    serta sanggup berkompetisi di tingkat Nasional maupun Internasional.</li>
                                <li>Terjalin kerjasama dalam berbagai bidang dengan berbagai pihak, baik dalam maupun luar
                                    negeri dalam rangka mengembangkan Tridharma perguruan tinggi, pengembangan SDM, dan
                                    penguatan jaringan kerja.</li>
                            </ul>
                            <br>
                            <a href="https://unida.gontor.ac.id/id/visi-misi-tujuan-dan-sasaran-strategis-universitas-darussalam-gontor/"
                                target="_blank">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            direction: "vertical",
            slidesPerView: 1,
            spaceBetween: 30,
            mousewheel: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endsection
