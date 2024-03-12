@extends('template.main')

@section('css')
    <!-- Kontak Kami CSS -->
    {{-- <link rel="stylesheet" href="css/kontak-kami.css" /> --}}
@endsection

@section('content')
    <!-- Contact Us Start -->
    <div class="ukm background-terang px-4 py-3">
        <div class="breadcrumb"><a href="/lainnya"
                class="text-decoration-none hover-breadcrumb tulisan-gelap fw-bold pe-2">Others </a> / Barang Yang Wajib Di
            Bawa
        </div>
        <div class="title text-center">
            <h1 class="tulisan-gelap text-center fw-bolder">apa saja barang yang harus dibawa ? 🤔🤔</h1>
        </div>
        <hr>
        <div class="container-fluid text-center mx-2 my-2 ">
            {{-- Putra --}}
            <h3 class="tulisan-gelap fw-bolder">Untuk Mahasiswa : </h3>
            <div class="row d-flex justify-content-around">
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/pantofel.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">PANTOFEL</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/kemeja-putih.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Kemeja Putih</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/sepatu-olahraga.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Sepatu Olahraga</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/sandal.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">SANDAL</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/kaos-kaki.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Kaos Kaki</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/helm.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">HELM</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/celana-kain.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Celana Kain</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/sarung.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Sarung</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/peci.jpeg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Peci</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/trainning.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Celana Trainning</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/kaos-putih.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Kaos Putih</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/jaket.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Jaket</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/baju-koko.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Baju Koko</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/buku-tulis.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Buku Tulis</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/pulpen.jpeg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Pulpen</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/kemeja-standar.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Kemeja Standar</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswa/al-quran.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Al-Qur'an</h5>
                    </div>
                </div>
                {{-- End --}}
            </div>
            {{-- END PUTRA --}}
            <hr>
            {{-- PUTRI --}}
            <h3 class="tulisan-gelap fw-bolder">Untuk Mahasiswi : </h3>
            <div class="row d-flex justify-content-around">
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/pantofel-putri.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Pantofel Hitam ukuran hak 3cm</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/sepatu-olahraga-putri.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Sepatu Olahraga Standar</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/alat-makan-putri.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Peralatan Makan</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/payung-putri.png" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Payung Lipat Polos</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/tunik-krem-putri.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Tunik Krem</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/alquran-terjemah.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">alquran-terjemah</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/sajadah-putri.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Sajadah Standar</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/legging-hitam.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Legging Hitam</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/rok-biru-putri.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Rok Biru Dongker (Selain Rok Span)</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/botol-minum-putri.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Botol Minum BPA Free (Ukuran Minimal 600ml)</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/daleman-rok-hitam.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Daleman Rok Hitam</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/mukena-putih-putri.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Mukena Putih</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/jam-tangan-putri.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Jam Tangan Standar 3cm</h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/kaos-kaki-putri.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Kaos Kaki - Ukuran 1 Jengkal diatas matakaki - Warna
                            Krem/Putih </h5>
                    </div>
                </div>
                {{-- End --}}
                {{-- Card Barang --}}
                <div class="card card-barang background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/barang-mahasiswi/kerudung-biru-putri.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Kerudung Bergo Biru Dongker Syar'i (Setara Ukuran 140cm
                            x 140cm)</h5>
                    </div>
                </div>
                {{-- End --}}
            </div>
            {{-- END PUTRI --}}
        </div>
    </div>
@endsection
