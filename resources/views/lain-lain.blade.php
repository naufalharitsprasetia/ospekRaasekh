@extends('template.main')

@section('css')
    {{-- <link rel="stylesheet" href="css/kontak-kami.css" /> --}}
@endsection

@section('content')
    <!-- Contact Us Start -->
    <div class="lain-lain background-terang px-4 py-5">
        <div class="title text-center">
            <h1 class="tulisan-gelap text-center fw-bolder"><i class="fa-solid fa-circle-info fa-xl"
                    style="color: #432818 ;"></i> Pusat Informasi</h1>
            <p class="tulisan-gelap text-center fw-bolder">NB : Klik Pada Kotak Untuk Mengunjungi Halaman </p>
        </div>
        <hr>
        <div class="container-fluid mx-2 my-2 ">
            <div class="row d-flex justify-content-around">
                {{-- Card 1 --}}
                <div class="card card-others background-gelap mb-3 col-3 mx-2 my-2">
                    <a href="/persiapan-barang" class="tulisan-terang text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title tulisan-terang"><i class="fa-solid fa-suitcase-rolling fa-xl"
                                    style="color: #fff6c3;"></i> Barang Yang Wajib Dibawa</h5>
                        </div>
                    </a>
                </div>
                {{-- End --}}
                {{-- Card 1 --}}
                <div class="card card-others background-gelap mb-3 col-3 mx-2 my-2">
                    <a href="/profil-unida" class="tulisan-terang text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title tulisan-terang"><i class="fa-solid fa-building-columns fa-xl"
                                    style="color: #fff6c3;"></i> Profil Unida</h5>
                        </div>
                    </a>
                </div>
                {{-- End --}}
                {{-- Card 1 --}}
                <div class="card card-others background-gelap mb-3 col-3 mx-2 my-2">
                    <a href="/ukm" class="tulisan-terang text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title tulisan-terang"><i class="fa-solid fa-masks-theater fa-xl"
                                    style="color: #fff6c3;"></i> Unit Kegiatan Mahasiswa (Putra)</h5>
                        </div>
                    </a>
                </div>
                {{-- End --}}
                {{-- Card 1 --}}
                <div class="card card-others background-gelap mb-3 col-3 mx-2 my-2">
                    <a href="/ukm-putri" class="tulisan-terang text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title tulisan-terang"><i class="fa-solid fa-icons fa-xl"
                                    style="color: #fff6c3;"></i> Unit Kegiatan Mahasiswa (Putri)</h5>
                        </div>
                    </a>
                </div>
                {{-- End --}}
                {{-- Card 1 --}}
                <div class="card card-others background-gelap mb-3 col-3 mx-2 my-2">
                    <a href="/seragam-unida" class="tulisan-terang text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title tulisan-terang"><i class="fa-solid fa-person-dress fa-xl"
                                    style="color: #fff6c3;"></i> Seragam/Outfit Unida</h5>
                        </div>
                    </a>
                </div>
                {{-- End --}}
                {{-- Card 1 --}}
                <div class="card card-others background-gelap mb-3 col-3 mx-2 my-2">
                    <a href="/pembayaran-du" class="tulisan-terang text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title tulisan-terang"><i class="fa-solid fa-money-bills fa-xl"
                                    style="color: #fff6c3;"></i> Info Daftar Ulang</h5>
                        </div>
                    </a>
                </div>
                {{-- End --}}
                {{-- Card 1 --}}
                <div class="card card-others background-gelap mb-3 col-3 mx-2 my-2">
                    <a href="/timeline" class="tulisan-terang text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title tulisan-terang"><i class="fa-solid fa-timeline fa-xl"
                                    style="color: #fff6c3;"></i> Jadwal Kegiatan</h5>
                        </div>
                    </a>
                </div>
                {{-- End --}}
                {{-- Card 1 --}}
                <div class="card card-others background-gelap mb-3 col-3 mx-2 my-2">
                    <a href="/galeri" class="tulisan-terang text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title tulisan-terang"><i class="fa-solid fa-images fa-xl"
                                    style="color: #fff6c3;"></i> Galeri</h5>
                        </div>
                    </a>
                </div>
                {{-- End --}}
                {{-- Card 1 --}}
                <div class="card card-others background-gelap mb-3 col-3 mx-2 my-2">
                    <a href="/struktur" class="tulisan-terang text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title tulisan-terang"><i class="fa-solid fa-sitemap fa-xl"
                                    style="color: #fff6c3;"></i> Struktur Kepanitiaan</h5>
                        </div>
                    </a>
                </div>
                {{-- End --}}
                {{-- Card 1 --}}
                <div class="card card-others background-gelap mb-3 col-3 mx-2 my-2">
                    <a href="https://linktr.ee/Ospekunida2024" target="_blank" class="tulisan-terang text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title tulisan-terang"><i class="fa-solid fa-link fa-xl"
                                    style="color: #fff6c3;"></i> LinkTree</h5>
                        </div>
                    </a>
                </div>
                {{-- End --}}
                {{-- Card 1 --}}
                <div class="card card-others background-gelap mb-3 col-3 mx-2 my-2">
                    <a href="/faq" class="tulisan-terang text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title tulisan-terang"><i class="fa-solid fa-circle-question fa-xl"
                                    style="color: #fff6c3;"></i> FAQ</h5>
                        </div>
                    </a>
                </div>
                {{-- End --}}
                {{-- Card 1 --}}
                <div class="card card-others background-gelap mb-3 col-3 mx-2 my-2">
                    <a href="/pengumuman" class="tulisan-terang text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title tulisan-terang"><i class="fa-solid fa-scroll fa-xl"
                                    style="color: #fff6c3;"></i> Pengumuman</h5>
                        </div>
                    </a>
                </div>
                {{-- End --}}
            </div>
        </div>
    </div>
@endsection
