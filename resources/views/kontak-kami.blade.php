@extends('template.main')

@section('css')
    <!-- Kontak Kami CSS -->
    <link rel="stylesheet" href="css/kontak-kami.css" />
@endsection

@section('content')
    <!-- Contact Us Start -->
    <div class="contactUs mt-0">
        <div class="title-contact">
            <h1 class="tulisan-gelap text-center fw-bolder">Kontak Kami</h1>
        </div>
        <div class="box">
            <!-- Form -->
            <div class="contact form">
                <p>Kirim Pesan</p>
                <form>
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>Nama Depan</span>
                                <input type="text" placeholder="" />
                            </div>
                            <div class="inputBox">
                                <span>Nama Belakang</span>
                                <input type="text" placeholder="" />
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="text" placeholder="" />
                            </div>
                            <div class="inputBox">
                                <span>Nomer Handphone</span>
                                <input type="text" placeholder="" />
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>Pesan</span>
                                <textarea placeholder="Tulis pesan anda disini..."></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox ">
                                <input type="submit" value="Kirim" class="submit background-gelap tulisan-terang" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Info Box -->
            <div class="contact info">
                <p class="text-decoration-underline">Info Kontak</p>
                <div class="infoBox">
                    <div>
                        <img src="assets/location.png" alt="" />
                        <p>
                            Universitas Darussalam Gontor <br />
                            Jl. Raya Siman No.Km. 6, Dusun I, Siman, Kec. Siman, Kabupaten
                            Ponorogo, Jawa Timur.
                        </p>
                    </div>
                    <div>
                        <img src="assets/mail.png" alt="" />
                        <p>pmb@unida.gontor.ac.id</p>
                    </div>
                    <div>
                        <img src="assets/call.png" alt="" />
                        <p>(0352) 483762</p>
                    </div>
                </div>

                <!-- Map -->
                <div class="contact map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.9308554975364!2d111.49008531437772!3d-7.902292780822469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e790aa79efd972b%3A0xf09ed064954d29b2!2sUNIVERSITY%20OF%20DARUSSALAM%20GONTOR!5e0!3m2!1sen!2sid!4v1635344541528!5m2!1sen!2sid"
                        style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
