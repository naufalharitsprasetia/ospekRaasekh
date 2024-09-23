@extends('template.main')

@section('css')
    <!-- Kontak Kami CSS -->
    {{-- <link rel="stylesheet" href="css/kontak-kami.css" /> --}}
@endsection

@section('content')
    <!-- pengumuman Start -->
    <div class="pengumuman background-terang px-4 py-3">
        <div class="breadcrumb"><a href="/lainnya"
                class="text-decoration-none hover-breadcrumb tulisan-gelap fw-bold pe-2">Others </a> / Pengumuman
        </div>
        <div class="title text-center">
            <h1 class="tulisan-gelap text-center fw-bolder">Papan Pengumuman</h1>
        </div>
        <hr>
        <div class="container-fluid text-center mx-2 my-2 ">
            <h3 class="tulisan-gelap fw-bolder">semua pengumuman terkait ospek raasekh 2024 akan di tampilkan disini..</h3>
            {{-- card Pengumuman Start --}}
            <br>
            {{-- Accordion Start --}}
            <div class="accordion" id="contoh">
                {{-- items start --}}
                {{-- 1 --}}
                <div class="accordion-item text-start">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            <strong>
                                Pengumuman #1 (Maklumat BAK & PENGUMUMAN MABA 2024 & RINCIAN DAFTAR ULANG 2024-2025)
                            </strong>
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>1. Maklumat Biro Administrasi Keuangan (BAK)
                                    <br>
                                    <a href="/assets/archive/maklumatbak.pdf" target="_blank">Klik Disini Untuk Melihat
                                        Maklumatnya</a>
                                </li>
                                <br>
                                <li>2. Maklumat Mahasiswa Baru (MABA) 2024
                                    <br>
                                    <a href="/assets/archive/pengumumanmaba2024.pdf" target="_blank">Klik Disini Untuk
                                        Melihat Maklumatnya</a>
                                </li>
                                <br>
                                <li>3. Rincian Daftar Ulang (DU) 2024-2025
                                    <br>
                                    <a href="https://drive.google.com/drive/folders/1Bs5X40OO1RNcW2ehMUz3K-B7vn2TJsP1"
                                        target="_blank">Klik Disini Untuk Melihat Maklumatnya</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- 1 end --}}
                {{-- 2 --}}
                <div class="accordion-item text-start">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <strong>
                                Pengumuman #2 (PMB)
                            </strong>
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <i>
                                Update jum'at 5 april 2024
                            </i>
                            <br>
                            <strong>
                                INFORMASI PENERIMAAN MAHASISWA BARU UNIVERSITAS DARUSSALAM GONTOR 2024
                            </strong>
                            <br>
                            <a href="" target="_blank">
                                pmb.unida.gontor.ac.id
                            </a>
                            <br><br>
                            <strong>
                                Langkah - langkah Menjadi Mahasiswa Universitas Darussalam Gontor 2024
                            </strong>
                            <br>
                            <br>
                            <strong>
                                A. Daftar Online
                            </strong>
                            <br>
                            <ul>
                                <li>
                                    1. Masuk link pendaftaran
                                    <a href="">
                                        admisi.unida.gontor.ac.id
                                    </a>
                                </li>
                                <li>
                                    2. Klik <strong>
                                        login with google.
                                    </strong>
                                </li>
                                <li>
                                    3. Silahkan mengisi biodata > Pilih kampus > pilih 3 jurusan yang diminati > Dan
                                    <strong>Submit</strong>
                                    , Jika sudah berhasil maka akan muncul tampilan <strong> Menu (Home, Participants,
                                        Registration,
                                        Payment) </strong> pada akun anda.
                                </li>
                                <li>
                                    4. Silahkan upload persyaratan di Menu <strong>Registration</strong> kemudian klik
                                    Upload
                                    Requirements.
                                </li>
                                <li>
                                    5. Silahkan melihat Tagihan di menu <strong>Payments</strong> kemudian melakukan
                                    Pembayaran melalui
                                    Virtual Account yang ada di Billing info.
                                </li>
                                <li>
                                    6. Mengikuti Ujian Lisan Dan Tulis <strong>(NON KMI)</strong>
                                </li>
                                <li>
                                    7. Mengikuti Yudisium Kelulusan <strong>(NON KMI)</strong>
                                </li>
                                <li>
                                    8. Jika sudah melakukan Her Registrasi via Virtual Account Maka Seluruh Calon
                                    Mahasiswa
                                    Wajib Mencetak <strong>Kartu Tanda Registrasi</strong> pada halaman utama Akun
                                    pendaftaran. Jika
                                    pembayaran melalui Transfer Rekening, maka diwajibkan mencetak <strong>Kwitansi/Bukti
                                        pembayaran</strong>
                                    yang sudah dilakukan.
                                </li>
                            </ul>
                            <br>
                            link download document persyaratan program S1
                            <br>
                            <a href="">
                                pmb.unida.gontor.ac.id/info-pmb/syarat-pendaftaran/
                            </a>
                            <br>
                            <br>
                            link download document persyaratan program pascasarjana
                            <br>
                            <a href="">
                                pmb.unida.gontor.ac.id/info-pmb/syarat-pendaftaran-2-3/
                            </a>
                            <br>
                            <br>
                            link download booklet PMB 2024
                            <br>
                            <a href="">
                                drive.google.com/file/d/1V2vQVPTM-OOAsJRh4CRTMEcQS-am-WMi/view?pli=1
                            </a>
                            <br>
                            <br>
                            link download brosur Unida 2024
                            <br>
                            <a href="">
                                drive.google.com/file/d/1aEwSYRokz8b1OrXxT5WFWVS1-t0gqp0Z/view
                            </a>
                            <br>
                            <br>
                            link mekanisme ujian seleksi (NON KMI)
                            <br>
                            <a href="">
                                pmb.unida.gontor.ac.id/informasi-ujian-seleksi/
                            </a>
                            <br>
                            <br>
                            Link Informasi Penerimaan Mahasiswa Baru <strong>
                                Fakultas Kedokteran
                            </strong>
                            <br>
                            <a href="">
                                fk.unida.gontor.ac.id
                            </a>
                            <br>
                            <br>
                            <strong>
                                B. Datang Ke Universitas Darussalam
                            </strong>
                            <ul>
                                <li>
                                    1. Silahkan melapor <strong>Kedatangan</strong>
                                </li>
                                <li>
                                    2. Silahkan melakukan <strong>Validasi Data</strong>
                                </li>
                                <li>
                                    3. Silahkan mengumpulkan <strong>Berkas pendaftaran</strong> (Persyaratan & kartu tanda
                                    registrasi)
                                </li>
                                <li>
                                    4. Silahkan melakukan <strong>Pembayaran Daftar Ulang</strong> (jika belum)
                                </li>
                                <li>
                                    5. Silahkan melihat Kamar/Asrama.
                                </li>
                                <li>
                                    6. Silahkan melakukan <strong>Interview Prodi</strong>
                                </li>
                                <li>
                                    7. Silahkan mengumpulkan <strong>SK 4 tahun</strong> di tempat interview prodi masing"
                                    (bagi yang lanjut
                                    4 tahun)
                                </li>
                                <li>
                                    8. Silahkan melihat <strong>Pengumuman Hasil</strong> Interview Prodi.
                                </li>
                                <li>
                                    9. Silahkan meminta NIM dan mengambil Mata Kuliah melalui akun SIAKAD
                                </li>
                            </ul>
                            <br>
                            <strong>
                                C. Menjadi Mahasiswa
                            </strong>

                            <ul>
                                <li>
                                    1. Mengikuti Ospek
                                </li>
                                <li>
                                    2. Mengikuti Perkuliahan
                                </li>
                                <li>
                                    3. Tinggal Di Asrama
                                </li>
                            </ul>
                            <br>
                            <strong><i>
                                    Nb. Kedatangan Sesuai Di Kampus Masing-masing
                                </i></strong>
                            <br>
                            <strong>
                                <br>
                                ADMISSION OFFICE
                                <br>
                                UNIVERSITY OF DARUSSALAM GONTOR 2024
                            </strong>
                        </div>
                    </div>
                </div>
                {{-- 2 end --}}
                {{-- item ends --}}
            </div>
        </div>
        {{-- Card Pengumuman End --}}
    </div>
    </div>
@endsection
