@extends('template.main')

@section('css')
    <!-- pembayaran-du.css -->
    <link rel="stylesheet" href="css/pembayaran-du.css" />
@endsection

@section('content')
    <!-- Container Start -->
    <div class="pembayaran-du pt-4 pb-5 font-poppins">
        <div class="title-pembayaran">
            <h1 class="tulisan-terang text-center fw-bolder">Informasi Biaya dan Daftar Ulang</h1>
            <h1 class="tulisan-terang text-center fw-bolder">Mahasiswa Baru UNIDA Gontor</h1>
        </div>

        <div class="info-pembayaran-du">
            <p>
                Dipermaklumkan kepada segenap calon mahasiswa/i baru Universitas
                Darussalam Gontor (UNIDA) agar memperhatikan hal-hal berikut:
            </p>
        </div>

        <div class="card-pembayaran-du font-poppins">
            <div class="card-du border-coklat-muda">
                <div class="jdl-pendaftaran-card">
                    <p>Biaya Daftar Ulang</p>
                </div>
                <div class="harga-pendaftaran">
                    <h3>*Sesuaikan Dengan Prodi Yang ingin kalian ambil</h3>
                </div>
                <div class="list-ketentuan font-poppins">
                    <ul style="list-style: bullet">
                        <li>
                            Biaya daftar ulang diperuntukkan kepada seluruh calon mahasiswa/i baru sesuai dengan program
                            studi dan kampus perkuliahan masing-masing.
                        </li>
                        <li>
                            Calon mahasiswa/i baru yang telah menyelesaikan program matrikulasi bahasa tidak dikenakan biaya
                            pendaftaran dan langsung melengkapi biaya daftar ulang sesuai dengan program studinya.
                        </li>
                        <li>
                            Adapun ketentuan daftar ulang mahasiswa/i baru adalah sebagaimana berikut :
                            <ol type="a">
                                <li> Calon mahasiswa/i baru Jalur Reguler (Non Alumni KMI Gontor) yang
                                    telah
                                    dinyatakan
                                    lolos seleksi agar melunasi daftar ulang dengan memperhatikan maklumat yang terlampir
                                    sesuai dengan hasil yudisium kelulusan.</li>
                                <li>Calon mahasiswa/i baru Jalur Khusus (Alumni KMI Gontor 2023)* <br><br>Putra : Melunasi
                                    biaya
                                    daftar ulang dengan nominal Rp. 8.375.000,- (Pendaftaran program studi tertinggi) ke
                                    rekening yang telah ditentukan (lihat poin B.4) serta menyimpan bukti pembayarannya.
                                    Setelah mendapat program studi, masing-masing mahasiswa dapat mengambil sisa pembayaran
                                    sesuai dengan biaya pendaftaran program studinya. <br><br>Putri : Melunasi biaya daftar
                                    ulang dengan nominal minimal Rp. 5.000.000,- ke rekening yang telah ditentukan (lihat
                                    poin B.4) serta menyimpan bukti pembayarannya. Setelah mendapat program studi,
                                    masing-masing mahasiswi dapat melengkapi sisa pembayaran sesuai dengan biaya pendaftaran
                                    program studinya.</li>
                                <li>Calon mahasiswa/i baru Jalur Non Reguler (Alumni KMI Gontor Non 2023)* melunasi
                                    daftar ulang sesuai dengan pilihan prodi pertama.</li>
                            </ol>
                            <br>
                            NB :
                            <br>
                            *Untuk kampus reguler (Siman dan Mantingan)
                            <br>
                            **Adapun kampus yang lain menyesuaikan maklumat dari Bagian Administrasi.
                        </li>
                        <li>
                            Seluruh pembayaran dilakukan dengan metode transfer sesuai dengan ketentuan-ketentuan berikut
                            ini :
                            <ol type="a">
                                <li>Kampus Siman dan Robithoh : <br>Pembayaran dapat diakses melalui akun admisi
                                    masing-masing pada menu “Payment” lalu klik “Billing Info”</li>
                                <li>Kampus Mantingan : <br>
                                    Biaya daftar ulang dikirim melalui
                                    <br>
                                    Bank Muammalat
                                    <br>
                                    No Rek 7430008666
                                    <br>
                                    Atas Nama Universitas Darussalam Gontor
                                </li>
                            </ol>
                        </li>
                        <li>
                            <a href="https://pmb.unida.gontor.ac.id/informasi-biaya-dan-daftar-ulang/" id="lainnya">baca
                                selengkapnya...</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="btn-pembayaran">
                    <a href="#popup-pembayaran-putra">
                        <button>Pembayaran Putra</button>
                    </a>
                </div>
                <div class="btn-pembayaran">
                    <a href="#popup-pembayaran-putri">
                        <button>Pembayaran Putri</button>
                    </a>
                </div> --}}
            </div>

            <div class="card-info border-coklat-muda">
                <div class="jdl-pendaftaran-card">
                    <p>Informasi Daftar Ulang</p>
                </div>
                <div class="desc-du">
                    <p>
                        Untuk informasi biaya daftar ulang mahasiswa baru Tahun Ajaran
                        2024-2025 / 1445-1446, silahkan klik tombol dibawah ini
                    </p>
                </div>
                <div class="btn-pembayaran">
                    {{--  --}}
                    <a href="https://drive.google.com/drive/folders/1Bs5X40OO1RNcW2ehMUz3K-B7vn2TJsP1" target="_blank">
                        <button>Download Daftar Ulang</button>
                    </a>
                </div>
                <div class="btn-pembayaran mt-2">
                    {{--  --}}
                    <a href="https://pmb.unida.gontor.ac.id/informasi-biaya-dan-daftar-ulang/" target="_blank">
                        <button>Klik Untuk Detail Lebih Lanjut</button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Contact Start -->
        <div class="narahubung">
            <div class="jdl-narahubung ">
                <h3 class="text-decoration-underline mb-5">Narahubung</h3>
            </div>
            <div class="card-narahubung">
                <a href="https://wa.me/6281350743261" target="_blank" class="text-decoration-none">
                    <div class="card-narahubung-wa border-coklat-muda ">
                        <h3>Kampus Putra</h3>
                        <p>Al Ust Hilal Al-Akbar Nuraindra</p>
                        <div class="hubungi-saya">
                            <img src="assets/wa.png" />
                            <p>Hubungi Saya</p>
                        </div>
                    </div>
                </a>
                <a href="https://wa.me/6281393706221" target="_blank" class="text-decoration-none">
                    <div class="card-narahubung-wa putri border-coklat-muda">
                        <h3>Kampus Putri</h3>
                        <p>Kantor Bagian Administrasi</p>
                        <div class="hubungi-saya">
                            <img src="assets/wa.png" />
                            <p>Hubungi Saya</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Contact End -->
    </div>
    <!-- Container End -->

    <!-- Pembayaran Popup Start -->
    <div class="popup-pembayaran" id="popup-pembayaran-putra">
        <div class="popup-pembayaran-putra">
            <div class="popup__header">
                <p>Pembayaran Mahasiswa Putra</p>
            </div>
            <div class="popup__content">
                <p>
                    Pembayaran dilakukan ke nomor Virtual Account (VA) BSI yang akan
                    muncul di akun admisi masing - masing.
                </p>
                <p>Nomor VA akan muncul 1 - 3 hari setelah pendaftaran</p>
            </div>
            <div class="btn-ok">
                <a href="#">
                    <button>OK</button>
                </a>
            </div>
        </div>
    </div>
    <div class="popup-pembayaran" id="popup-pembayaran-putri">
        <div class="popup-pembayaran-putri">
            <div class="popup__header">
                <p>Pembayaran Mahasiswi Putri</p>
            </div>
            <div class="popup__content">
                <p>
                    Pembayaran dilakukan ke nomor Virtual Account (VA) BSI yang akan
                    muncul di akun admisi masing - masing.
                </p>
                <p>Nomor VA akan muncul 1 - 3 hari setelah pendaftaran</p>
            </div>
            <div class="btn-ok">
                <a href="#">
                    <button>OK</button>
                </a>
            </div>
        </div>
    </div>

    {{-- <div class="popup-details" id="popup-details">
        <div class="popup-container">
            <div class="popup-close">
                <a href="#">&times;</a>
            </div>
            <div class="popup-header">
                <p>
                    Syarat dan Ketentuan <br />
                    Pembayaran Daftar Ulang
                </p>
            </div>
            <div class="popup__content">
                <div class="list-ketentuan">
                    <ul style="line-height: 1.5rem;font-size: 0.8rem;">
                        <li>
                            <span>Putra</span> : Melunasi biaya daftar ulang dengan nominal
                            Rp. 8.375.000,- (Pendaftaran program studi tertinggi) ke
                            rekening yang telah ditentukan serta menyimpan bukti
                            pembayarannya.
                        </li>
                        <li>
                            <span>Putri</span> : Melunasi biaya daftar ulang dengan nominal
                            minimal Rp. 5.000.000,- ke rekening yang telah ditentukan serta
                            menyimpan bukti pembayarannya.
                        </li>
                        <li>
                            Biaya Daftar Ulang akan dikembalikan sesuai dengan Prodi
                            (setelah mendapatkan prodi)
                        </li>
                        <li>
                            Calon mahasiswa/i baru yang telah menyelesaikan program
                            matrikulasi bahasa tidak dikenakan biaya pendaftaran dan
                            langsung melengkapi biaya daftar ulang sesuai dengan program
                            studinya.
                        </li>
                        <li>Seluruh pembayaran dilakukan dengan metode transfer</li>
                        <li>
                            Calon mahasiswa/i baru Jalur Non Reguler
                            <span>(Alumni KMI Gontor Non 2024)*</span> melunasi daftar ulang
                            sesuai dengan pilihan prodi pertama.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div> --}}
    <!-- Pembayaran Popup End -->
@endsection
