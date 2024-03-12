@extends('template.main')

@section('css')
    <link rel="stylesheet" href="css/jurusan.css" />
@endsection

@section('content')
    <!-- Jurusan Start -->
    <div class="jurusan">
        <div class="jurusan-container">
            <div class="title-jurusan pt-3">
                <h1 class="tulisan-gelap text-center fw-bolder">Jurusan</h1>
                <h1 class="tulisan-gelap text-center fw-bolder">Universitas Darussalam</h1>
                <hr>
            </div>
            <div class="card-jurusan font-poppins">
                <div class="row-1">
                    <div class="card-1">
                        <div class="nama-fakultas">
                            <img src="assets/graduation.png" alt="tarbiyah" />
                            <p>Fakultas Tarbiyah</p>
                        </div>
                        <div class="line">
                            <span></span>
                        </div>
                        <div class="prodi atas">
                            <a href="https://pai.unida.gontor.ac.id/" target="_blank">
                                <img src="assets/tarbiyah.png" alt="" />
                                <p>Pendidikan Agama Islam</p>
                            </a>
                        </div>
                        <div class="prodi">
                            <a href="https://pba.unida.gontor.ac.id/" target="_blank">
                                <div class="img-prodi">
                                    <img src="assets/tarbiyah.png" alt="" />
                                </div>
                                <div class="nama-prodi">
                                    <p>Pendidikan Bahasa Arab</p>
                                </div>
                            </a>
                        </div>
                        <div class="prodi">
                            <a href="https://tbi.unida.gontor.ac.id/" target="_blank">
                                <img src="assets/tarbiyah.png" alt="" />
                                <p>Tadris Bahasa Inggris</p>
                            </a>
                        </div>
                    </div>

                    <div class="card-2 tengah">
                        <div class="nama-fakultas">
                            <img src="assets/graduation.png" alt="tarbiyah" />
                            <p>Fakultas Ushuluddin</p>
                        </div>
                        <div class="line">
                            <span></span>
                        </div>
                        <div class="prodi atas">
                            <a href="https://saa.unida.gontor.ac.id/" target="_blank">
                                <img src="assets/usuludin.png" alt="" />
                                <p>Studi Agama - Agama</p>
                            </a>
                        </div>
                        <div class="prodi">
                            <a href="https://afi.unida.gontor.ac.id/" target="_blank">
                                <div class="img-prodi">
                                    <img src="assets/usuludin.png" alt="" />
                                </div>
                                <div class="nama-prodi">
                                    <p>Aqidah dan Filsafat Islam</p>
                                </div>
                            </a>
                        </div>
                        <div class="prodi">
                            <a href="https://iqt.unida.gontor.ac.id/" target="_blank">
                                <img src="assets/usuludin.png" alt="" />
                                <p>Ilmu Al - Quran & Tafsir</p>
                            </a>
                        </div>
                    </div>

                    <div class="card-3">
                        <div class="nama-fakultas">
                            <img src="assets/graduation.png" alt="tarbiyah" />
                            <p>Fakultas Syariah</p>
                        </div>
                        <div class="line">
                            <span></span>
                        </div>
                        <div class="prodi atas">
                            <a href="https://pm.unida.gontor.ac.id/" target="_blank">
                                <img src="assets/syariah.png" alt="" />
                                <p>Perbandingan Madzhab</p>
                            </a>
                        </div>
                        <div class="prodi">
                            <a href="https://hes.unida.gontor.ac.id/" target="_blank">
                                <div class="img-prodi">
                                    <img src="assets/syariah.png" alt="" />
                                </div>
                                <div class="nama-prodi">
                                    <p>Hukum Ekonomi Syariah</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row-1">
                    <div class="card-1">
                        <div class="nama-fakultas">
                            <img src="assets/graduation.png" alt="fem" />
                            <p>Fakultas Ekonomi & Manajemen</p>
                        </div>
                        <div class="line">
                            <span></span>
                        </div>
                        <div class="prodi atas">
                            <a href="https://ei.unida.gontor.ac.id/" target="_blank">
                                <img src="assets/fem.png" alt="" />
                                <p>Ekonomi Islam</p>
                            </a>
                        </div>
                        <div class="prodi">
                            <a href="https://mgt.unida.gontor.ac.id/" target="_blank">
                                <div class="img-prodi">
                                    <img src="assets/fem.png" alt="" />
                                </div>
                                <div class="nama-prodi">
                                    <p>Manajemen</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="card-2 tengah">
                        <div class="nama-fakultas">
                            <img src="assets/graduation.png" alt="humaniora" />
                            <p>Fakultas Humaniora</p>
                        </div>
                        <div class="line">
                            <span></span>
                        </div>
                        <div class="prodi atas">
                            <a href="https://hi.unida.gontor.ac.id/" target="_blank">
                                <img src="assets/humaniora.png" alt="" />
                                <p>Hubungan Internasional</p>
                            </a>
                        </div>
                        <div class="prodi">
                            <a href="https://ilkom.unida.gontor.ac.id/" target="_blank">
                                <div class="img-prodi">
                                    <img src="assets/humaniora.png" alt="" />
                                </div>
                                <div class="nama-prodi">
                                    <p>Ilmu Komunikasi</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="card-3">
                        <div class="nama-fakultas">
                            <img src="assets/graduation.png" alt="saintek" />
                            <p>Fakultas Sains & Teknologi</p>
                        </div>
                        <div class="line">
                            <span></span>
                        </div>
                        <div class="prodi atas">
                            <a href="https://informatika.unida.gontor.ac.id/" target="_blank">
                                <img src="assets/saintek.png" alt="" />
                                <p>Teknik Informatika</p>
                            </a>
                        </div>
                        <div class="prodi">
                            <a href="https://tip.unida.gontor.ac.id/#/" target="_blank">
                                <div class="img-prodi">
                                    <img src="assets/saintek.png" alt="" />
                                </div>
                                <div class="nama-prodi">
                                    <p>Teknologi Industri Pangan</p>
                                </div>
                            </a>
                        </div>
                        <div class="prodi">
                            <a href="https://agro.unida.gontor.ac.id/" target="_blank">
                                <img src="assets/saintek.png" alt="" />
                                <p>Agroteknologi</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row-1">
                    <div class="card-2 tengah">
                        <div class="nama-fakultas">
                            <img src="assets/graduation.png" alt="kesehatan" />
                            <p>Fakultas Kesehatan</p>

                        </div>
                        <div class="line">
                            <span></span>
                        </div>
                        <div class="prodi atas">
                            <a href="https://farmasi.unida.gontor.ac.id/" target="_blank">
                                <img src="assets/kesehatan.png" alt="" />
                                <p>Farmasi</p>
                            </a>
                        </div>
                        <div class="prodi">
                            <a href="https://gizi.unida.gontor.ac.id/" target="_blank">
                                <div class="img-prodi">
                                    <img src="assets/kesehatan.png" alt="" />
                                </div>
                                <div class="nama-prodi">
                                    <p>Ilmu Gizi</p>
                                </div>
                            </a>
                        </div>
                        <div class="prodi">
                            <a href="https://k3.unida.gontor.ac.id/" target="_blank">
                                <img src="assets/kesehatan.png" alt="" />
                                <p>Keselamatan dan Kesehatan Kerja</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card End -->
            </div>
        </div>
    </div>
    <!-- Jurusan End -->
@endsection
