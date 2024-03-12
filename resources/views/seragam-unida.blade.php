@extends('template.main')

@section('css')
    <!-- Kontak Kami CSS -->
    {{-- <link rel="stylesheet" href="css/kontak-kami.css" /> --}}
@endsection

@section('content')
    <!-- Contact Us Start -->
    <div class="ukm background-terang px-4 py-3">
        <div class="breadcrumb"><a href="/lainnya"
                class="text-decoration-none hover-breadcrumb tulisan-gelap fw-bold pe-2">Others </a> / Seragam Unida
        </div>
        <div class="title text-center">
            <h1 class="tulisan-gelap text-center fw-bolder">Seragam yang dipakai Sehari-hari</h1>
        </div>
        <hr>
        <div class="container-fluid text-center mx-2 my-2 ">
            {{-- Putra --}}
            <h3 class="tulisan-gelap fw-bolder">Untuk Mahasiswa : </h3>
            <div class="row d-flex justify-content-around">

            </div>
            {{-- END PUTRA --}}
            <hr>
            {{-- PUTRI --}}
            <h3 class="tulisan-gelap fw-bolder">Untuk Mahasiswi : </h3>
            <div class="row d-flex justify-content-around">
                {{-- Card Seragam --}}
                <div class="card card-seragam background-gelap mb-3 col-2 mx-1 my-2 px-0">
                    <img src="assets/seragam-mahasiswi/seragam-olahraga.jpg" class="card-img-top">
                    <div class="ukm-title d-flex my-1 align-items-center justify-content-center">
                        <h5 class="card-title tulisan-terang mx-1">Seragam Olahraga</h5>
                    </div>
                </div>
                {{-- End --}}
            </div>
            {{-- END PUTRI --}}
        </div>
    </div>
@endsection
