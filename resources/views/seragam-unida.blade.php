@extends('template.main')

@section('css')
    <!-- Kontak Kami CSS -->
    <link rel="stylesheet" href="css/kontak-kami.css" />
@endsection

@section('content')
    <!-- Contact Us Start -->
    <div class="ukm background-terang px-4 py-3">
        <div class="breadcrumb"><a href="/lainnya"
                class="text-decoration-none hover-breadcrumb tulisan-gelap fw-bold pe-2">Others </a> / Seragam Unida
        </div>
        <div class="title text-center">
            <h1 class="tulisan-gelap text-center fw-bolder">Seragam Unida</h1>
        </div>
        <hr>
        <div class="container mx-2 my-2 ">
            <h3 class="tulisan-gelap fw-bolder">Universitas Darussalam Gontor</h3>
            <div class="divisi-list mb-5">
                <button type="button" class="btn btn-primary">Semua</button>
                <button type="button" class="btn btn-outline-primary">Putra</button>
                <button type="button" class="btn btn-outline-primary">Putri</button>
            </div>
        </div>
    </div>
@endsection
