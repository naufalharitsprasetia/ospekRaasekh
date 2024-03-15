@extends('template.main')

@section('css')
    <!-- Kontak Kami CSS -->
    {{-- <link rel="stylesheet" href="css/kontak-kami.css" /> --}}
@endsection

@section('content')
    <!-- Contact Us Start -->
    <div class="ukm background-terang px-4 py-3">
        <div class="breadcrumb"><a href="/lainnya"
                class="text-decoration-none hover-breadcrumb tulisan-gelap fw-bold pe-2">Others </a> / UKM (putra)
        </div>
        <div class="title text-center">
            <h1 class="tulisan-gelap text-center fw-bolder">Unit Kegiatan Mahasiswa (UKM) - Unida Siman (Putra)</h1>
        </div>
        <hr>
        <div class="penjelasan-ukm p-4">
            <h2 class="fw-bold text-decoration-underline tulisan-gelap font-poppins"> APA ITU UKM ?</h2>
            <blockquote> Unit Kegiatan Mahasiswa (UKM) adalah organisasi mahasiswa santri yang dinaungi Dewan Mahasiswa
                dalam
                meningkatkan kesamaan minat, kegemaraan, kreativitas dan orientasi aktivitas penyaluran kegiatan
                ekstrakulikuler didalam kampus </blockquote>
            <blockquote> UKM di UNIDA Gontor telah dikelompokkan kedalam 4 bidang yaitu Oleh Dzikir, Olah Fikir, Olah Rasa
                dan Olah
                Raga. Sebagai kampus pesantren semua ini adalah salah satu upaya kampus dalam meningkatkan mutu pembinaan
                minat dan kegemaraan mahasiswa santri serta sebagai sarana dalam menjaga kesehatan rohani dan jasmani.
                Keberagaman aktivitas dari setiap ukm dan 4 olah yang menjadi asas dari aktivitas tersebut telah membentuk
                ukm menjadi 22 unit kegiatan mahasiswa.</blockquote>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Olah Rasa
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Olah rasa</strong> kegiatan yang melatih
                            kemampuan mahasiswa dalam berkesenian dan berkebudayaan kemudian
                            dimanifestasikan menjadi sebuah mahakarya yang berkualitas. seni yang dilatih pun merupakan seni
                            murni dan
                            seni terapan yang dapat dirasakan dari nilai keindahan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Olah Pikir
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Olah Fikir</strong> Olah fikir merupakan sebuah aktivitas yang membentuk mahasiswa dalam
                            hal kenseptual, persepsi dan informasi,
                            dalam meningkatkan potensi berpendapat, dan menuliskan pikirannya dalam gagasan dan kelimuannya.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Olah Dzikir
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Olah Dzikir</strong> Olah Dzikir merupakan unsur yang paling diutamakan dalam kehidupan
                            mahasiswa untuk mengasah jiwa spritual, kegiatan ini bentuk integritas antara kegiatan rohani
                            dan jasmani mahasiswa dengan menjadikan
                            nilai agama sebagai landasan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Olah Raga
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Olah Raga</strong> merupakan aktivitas jasmani yang
                            dilakukan untuk melatih kegiatan fisik secara terprogram dengan
                            tujuan meningkatkan keterampilan nilai-nilai fungsional yang mencakup aspek kognitif, efektif,
                            dan sosial
                            bagi mahasiswa.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid mx-2 my-2 ">

            {{-- OLAH FIKIR --}}
            <h2 class="text-center tulisan-gelap fw-bolder">Divisi</h2>
            <h3 class="text-center">Olah Fikir</h3>
            <div class="row d-flex justify-content-around">
                {{-- Card Lembaga Dakwah Kampus (LDK) Luqmanul Haqim --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/luqmanulhakim.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">Lembaga Dakwah Kampus (LDK) Luqmanul Haqim</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Kelompok Studi Ekonomi Islam (KSEI) UNIDA Gontor --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/ksei.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">Kelompok Studi Ekonomi Islam (KSEI) UNIDA Gontor</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
            </div>
            {{-- End Olah Fikir --}}
            <hr>
            {{-- Olah Rasa --}}
            <h2 class="text-center tulisan-gelap fw-bolder">Divisi</h2>
            <h3 class="text-center">Olah Rasa</h3>
            <div class="row d-flex justify-content-around">
                {{-- Card UKM Marching Band --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/marching-band.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">Marching Band</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card ElJami'ah  Choirs Club --}}
                <div class="card card-ukm background-gelap mb-3 col-3  mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/choir.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">ElJami'ah Choirs Club</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card DIMENSI --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/dimensi.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">DIMENSI</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card HASTA (Himpunan Mahasiswa Trampil Universitas Darussalam Gontor) --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/hasta.jpg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">HASTA (Himpunan Mahasiswa Trampil Universitas Darussalam
                            Gontor)</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Markaz Khat UNIDA Gontor --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/khot.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">Markaz Khat UNIDA Gontor</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card TI (Tim Ilustrasi) --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/ilustrasi.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">TI (Tim Ilustrasi)</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Thibbun Nabawi --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/thibbun.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">Thibbun Nabawi </h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Pramuka Racana Al Faraby --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/faroby.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">UKM Pramuka Racana Al Faraby</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
            </div>
            {{-- End Olah Rasa --}}
            <hr>
            {{-- Olah Dzikir --}}
            <div class="row d-flex justify-content-around">
                <h2 class="text-center tulisan-gelap fw-bolder">Divisi</h2>
                <h3 class="text-center">Olah Dzikir</h3>
                {{-- Card Dzikrussalam --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/dzikrussalam.jpg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">Dzikrussalam Al Banjari</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
            </div>
            <hr>
            {{-- Olahraga --}}
            <div class="row d-flex justify-content-around">
                <h2 class="text-center tulisan-gelap fw-bolder">Divisi</h2>
                <h3 class="text-center">Olah Raga</h3>

                {{-- Card Cresta BBC (Basket Ball CLub) --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/basket.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">Cresta BBC (Basket Ball CLub)</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card UNIDA FC (Football Club) --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/bola.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">UNIDA FC (Football Club)</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Green Futsalisty --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/futsal.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">Green Futsalisty</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Tirandaz VBC (Volly Ball Club) --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/volly.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">Tirandaz VBC (Volly Ball Club)</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card UTTC (UNIDA Table Tennis Club) --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/tenismeja.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">UTTC (UNIDA Table Tennis Club) </h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card PB UNIDA (Persatuan Badminton Universitas Darussalam Gontor) --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/badminton.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">PB UNIDA (Persatuan Badminton Universitas
                            Darussalam
                            Gontor)</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card UTC (UNIDA Taekwondo CLub) --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/taekwondo.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">UTC (UNIDA Taekwondo CLub) </h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Resimen Mahasiswa (MENWA) Satuan 884 Gagak Hitam --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/menwa.jpg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">Resimen Mahasiswa (MENWA) Satuan 884 Gagak Hitam
                        </h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card UNIDA Archery Club --}}
                <div class="card card-ukm background-gelap mb-3 col-3 mx-1 my-2 pb-3">
                    <div class="ukm-title d-flex my-3 align-items-center justify-content-center">
                        <img src="/assets/ukm/archery.jpeg" width="80" alt="" class="rounded-circle">
                        <h5 class="card-title tulisan-terang mx-4">UNIDA Archery Club</h5>
                    </div>
                    <div class="tombol-detail-ukm">
                        <a href="" class="btn detail-btn-ukm background-terang w-100">Lihat Detail</a>
                    </div>
                </div>
                {{-- End --}}
            </div>
        </div>
    </div>
@endsection
