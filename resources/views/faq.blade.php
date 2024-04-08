@extends('template.main')

@section('css')
    <!-- Kontak Kami CSS -->
    {{-- <link rel="stylesheet" href="css/kontak-kami.css" /> --}}
@endsection

@section('content')
    <!-- FAQ Start -->
    <div class="faq background-terang px-4 py-3">
        <div class="breadcrumb"><a href="/lainnya"
                class="text-decoration-none hover-breadcrumb tulisan-gelap fw-bold pe-2">Others </a> / FAQ
        </div>
        <div class="title text-center">
            <h1 class="tulisan-gelap text-center fw-bolder">Frequently Asked Question (FAQ)</h1>
        </div>
        <hr>
        <div class="container-fluid text-center mx-2 my-2 ">
            <h3 class="tulisan-gelap fw-bolder">Apa saja ya yang sering ditanyakan ... 🤔🤔</h3>
            {{-- Search --}}
            <div class="row justify-content-center">
                <input
                    class="form-control search-faq w-50 text-center me-2 border border-primary border-2 bg-secondary-subtle"
                    type="search" placeholder="🔎cari pertanyaan..." name="search" id="search" aria-label="Search">
            </div>
            <br>
            {{-- Accordion Start --}}
            <div class="accordion" id="contoh">
                {{-- items start --}}
                @foreach ($faqs as $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $loop->iteration }}" aria-expanded="false"
                                aria-controls="collapse{{ $loop->iteration }}">
                                👥 : "{{ $faq->faq_pertanyaan }}"
                            </button>
                        </h2>
                        <div id="collapse{{ $loop->iteration }}" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $faq->faq_jawaban !!}
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- item ends --}}
            </div>
        </div>
    </div>
@endsection
