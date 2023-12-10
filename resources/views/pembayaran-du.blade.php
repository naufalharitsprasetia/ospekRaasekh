@extends('template.main')

@section('css')
    <!-- pembayaran-du.css -->
    <link rel="stylesheet" href="css/pembayaran-du.css" />
@endsection

@section('content')
    <!-- Container Start -->
    <div class="pembayaran-du">
        <div class="jdl-pembayaran-du">
            <h3>Informasi Biaya dan Daftar Ulang</h3>
            <h3>Mahasiswa Baru UNIDA Gontor</h3>
        </div>
        <div class="info-pembayaran-du">
            <p>
                Dipermaklumkan kepada segenap calon mahasiswa/i baru Universitas
                Darussalam Gontor (UNIDA) agar memperhatikan hal-hal berikut:
            </p>
        </div>

        <div class="card-pembayaran-du">
            <!-- <div class="card-pendaftaran">
                  <div class="jdl-pendaftaran-card">
                    <p>Biaya Pendaftaran</p>
                  </div>
                  <div class="harga-pendaftaran">
                    <h3>Rp 250.000</h3>
                  </div>
                  <div class="list-ketentuan">
                    <ul>
                      <li>Hanya untuk calon Mahasiswa/i Reguler (Non-Alumni Gontor)</li>
                      <li>Biaya Pendaftaran dibayarkan selama periode pendaftaran.</li>
                    </ul>
                  </div>
                  <div class="btn-pembayaran">
                    <a href="#popup-pembayaran-putra">
                      <button>Pembayaran Putra</button>
                    </a>
                  </div>
                  <div class="btn-pembayaran">
                    <a href="#popup-pembayaran-putri">
                      <button>Pembayaran Putri</button>
                    </a>
                  </div>
                </div> -->

            <div class="card-du">
                <div class="jdl-pendaftaran-card">
                    <p>Biaya Daftar Ulang</p>
                </div>
                <div class="harga-pendaftaran">
                    <h3>Rp 8.375.000</h3>
                </div>
                <div class="list-ketentuan">
                    <ul>
                        <li>
                            Khusus calon mahasiswa/i <span>Jalur Khusus</span> (Alumni
                            Gontor 2023)
                        </li>
                        <li>
                            Biaya Daftar Ulang akan dikembalikan sesuai dengan Prodi
                            (setelah mendapatkan prodi)
                        </li>
                        <li>
                            ... <a href="#popup-details" id="lainnya">lihat lainnya</a>
                        </li>
                    </ul>
                </div>
                <div class="btn-pembayaran">
                    <a href="#popup-pembayaran-putra">
                        <button>Pembayaran Putra</button>
                    </a>
                </div>
                <div class="btn-pembayaran">
                    <a href="#popup-pembayaran-putri">
                        <button>Pembayaran Putri</button>
                    </a>
                </div>
            </div>

            <div class="card-info">
                <div class="jdl-pendaftaran-card">
                    <p>Informasi Daftar Ulang</p>
                </div>
                <div class="desc-du">
                    <p>
                        Untuk informasi biaya daftar ulang mahasiswa baru Tahun Ajaran
                        2023-2024 / 1444-1445, silahkan klik tombol dibawah ini
                    </p>
                </div>
                <div class="btn-pembayaran">
                    <a download href="assets/DU-MAHASISWA-BARU2023-2024.pdf">
                        <button>Download Daftar Ulang</button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Contact Start -->
        <div class="narahubung">
            <div class="jdl-narahubung">
                <h3>Narahubung</h3>
            </div>
            <div class="card-narahubung">
                <a href="https://wa.me/6282115823355" target="_blank">
                    <div class="card-narahubung-wa">
                        <h3>Kampus Putra</h3>
                        <p>Al - Ustadz Nazha Muhammad Jundi</p>
                        <div class="hubungi-saya">
                            <img src="assets/wa.png" />
                            <p>Hubungi Saya</p>
                        </div>
                    </div>
                </a>
                <a href="https://wa.me/6281393706221" target="_blank">
                    <div class="card-narahubung-wa putri">
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

    <div class="popup-details" id="popup-details">
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
                    <ul>
                        <li>
                            Khusus calon mahasiswa/i <span>Jalur Khusus</span> (Alumni
                            Gontor 2023)
                        </li>
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
                            <span>(Alumni KMI Gontor Non 2023)*</span> melunasi daftar ulang
                            sesuai dengan pilihan prodi pertama.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Pembayaran Popup End -->
@endsection
