<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // FAQ SEEDER
        // 1 
        Faq::create([
            'faq_pertanyaan' => 'Bagaimana cara masuk/daftar sistem admisi (pendaftaran online) ?',
            'faq_jawaban' => 'Silahkan <a href="https://admisi.unida.gontor.ac.id/site/login" target="_blank">Klik Disini !</a>, lalu anda dapat daftar/login menggunakan akun google',
        ]);
        // 2
        Faq::create([
            'faq_pertanyaan' => 'Bagaimana cara mengubah data di admisi?',
            'faq_jawaban' => 'Untuk mengubah data bisa dilakukan di akun Admisi masing², buka menu Bio - lalu ada tombol action lalu klik yang "Update" 🙏🏻...',
        ]);
        // 3
        Faq::create([
            'faq_pertanyaan' => 'SKCK (Surat Keterangan Catatan Kepolisian) apakah perlu ?',
            'faq_jawaban' => 'SKCK diperuntukkan bagi yang NON-KMI, bagi lulusan KMI tidak perlu..',
        ]);
        // 4
        Faq::create([
            'faq_pertanyaan' => 'Apabila surat tugas dan surat pengabdian hilang bagaimana?',
            'faq_jawaban' => 'Silahkan untuk menghubungi/mengurusnya ke Sekpim (Sekretaris Pimpinan) Gontor..',
        ]);
        // 5
        Faq::create([
            'faq_pertanyaan' => 'Apakah wajib mengerjakan tes minat bakat dan kepribadian?',
            'faq_jawaban' => 'Ya, Wajib untuk Semua...',
        ]);
        // 5
        Faq::create([
            'faq_pertanyaan' => 'Bagaimana cara mengerjakan tes bahasa? username, password, dll ?',
            'faq_jawaban' => 'Insyaallah Tes bahasa akan dilakukan secara offline saat ananda sudah di UNIDA',
        ]);
        // 6
        Faq::create([
            'faq_pertanyaan' => 'Bagaimana apabila ada kendala dalam pembayaran, seperti VA yang belum keluar ?',
            'faq_jawaban' => 'Segala permasalahan pembayaran silahkan berkonsultasi pada bagian keuangan UNIDA, kontak nya sudah ada di halaman pembayaran-du <a href="/pembayaran-du">Klik Disini !</a>',
        ]);
        // 7 
        Faq::create([
            'faq_pertanyaan' => 'Link Google Drive yang ada di halaman bio untuk apa ? kok gak bisa di klik ?',
            'faq_jawaban' => 'tidak untuk apa-apa, memang seperti itu, di diamkan saja...',
        ]);
        // 8
        Faq::create([
            'faq_pertanyaan' => 'Ustadz, Pembayaran Daftar Ulang (DU) Terakhir kapan ?',
            'faq_jawaban' => 'Pembayaran paling lambat tanggal 24 April 2024',
        ]);
        // 9
        Faq::create([
            'faq_pertanyaan' => 'ustadz, nomer/kode Virtual Account (VA) untuk pembayarannya belum muncul di akun admisi, bagaimana ?',
            'faq_jawaban' => 'kode/nomer VA akan muncul maximal 3 hari setelah pendaftaran, jika belum muncul silahkan konsultasikan ke bagian keuangan',
        ]);
        // 10
        Faq::create([
            'faq_pertanyaan' => 'Bagaimana cara mendapatkan bukti pendaftaran online?',
            'faq_jawaban' => 'bukti pendaftaran online bisa didapatkan di akun admisi masing-masing pada menu registrasi>bio ada tombol Action lalu klik Print..',
        ]);
        // 11
        Faq::create([
            'faq_pertanyaan' => 'Ustadz, kenapa muncul keterangan Belum Ada Pengumuman/Keputusan ?',
            'faq_jawaban' => 'itu memang seperti itu, Karena memang belum ditentukan prodinya, nanti ditentukan nya ketika ananda sudah berada di kampus dan sudah melakukan interview...',
        ]);
        // 12
        Faq::create([
            'faq_pertanyaan' => 'Kenapa tidak muncul tagihan / kenapa tagihan nya 0 rupiah, padahal sudah keluar VA Code nya ?',
            'faq_jawaban' => 'Segala permasalahan pembayaran silahkan berkonsultasi pada bagian keuangan UNIDA, kontak nya sudah ada di halaman pembayaran-du <a href="/pembayaran-du">Klik Disini !</a>',
        ]);
        // 13
        Faq::create([
            'faq_pertanyaan' => 'Link Tes Minat & Bakat dan Tes Kepribadian ada dimana ya ustadz ?',
            'faq_jawaban' => 'ada di GuideBook yang telah dibagikan, ada juga di LinkTree',
        ]);
        // 14
        Faq::create([
            'faq_pertanyaan' => 'Saya selalu gagal ketika ingin mentransfer biaya daftar ulang, bagaimana ustadz ?',
            'faq_jawaban' => 'Segala permasalahan pembayaran silahkan berkonsultasi pada bagian keuangan UNIDA, kontak nya sudah ada di halaman pembayaran-du <a href="/pembayaran-du">Klik Disini !</a>',
        ]);
        // 15
        Faq::create([
            'faq_pertanyaan' => 'Kapan Terakhir Kedatangan Calon mahasiswa baru unida gontor ?',
            'faq_jawaban' => 'Kedatangan paling lambat 9 Syawwal 1445 H bagi putra dan Putri 8 Syawwal 1445 H',
        ]);
        // 16
        Faq::create([
            'faq_pertanyaan' => 'Bagaimana cara mengecek Akreditasi Program Studi (PRODI) / Jurusan ???',
            'faq_jawaban' => 'Bisa di Cek langsung di badan resmi / BanPT , lihat di link berikut <a href="https://www.banpt.or.id/direktori/prodi/pencarian_prodi.php" target="_blank">Klik Disini !</a>',
        ]);
        // 17
        Faq::create([
            'faq_pertanyaan' => 'Adalah info tentang fakultas Kedokteran ? Bagaimana jika anak saya ingin mendaftar ke fakultas kedokteran ? apakah lulusan kmi bisa daftar kedokteran ?',
            'faq_jawaban' => 'Semua Informasi tentang Fakultas Kedokteran dan pendaftarannya bisa dilihat di websitenya <a href="https://fk.unida.gontor.ac.id/" target="_blank">Klik Disini !</a>, Atau bisa menghubungi narahubung berikut <a href="https://wa.me/6285259338838" target="_blank">Klik Disini !</a>',
        ]);
        // 18
        Faq::create([
            'faq_pertanyaan' => 'Kapan Terakhir Pendaftaran Online ?',
            'faq_jawaban' => '28 Ramadhan 1445 H',
        ]);
        // 19
        Faq::create([
            'faq_pertanyaan' => 'kolom NIM pada surat pernyataan di isi dengan apa ustadz ?',
            'faq_jawaban' => 'NIM / Nomer Induk Mahasiswa didapat setelah ananda menjadi mahasiswa, jadi Bisa Dikosongkan Saja',
        ]);
        // 20
        Faq::create([
            'faq_pertanyaan' => 'Assalamualaikum Ustadz, apakah di unida ananda boleh membawa laptop ? apakah ananda wajib / harus bawa laptop ?',
            'faq_jawaban' => 'Waalaikumsalam, Boleh bawa Laptop, Tapi tidak Wajib / tidak Harus',
        ]);
        // 21
        Faq::create([
            'faq_pertanyaan' => 'Jika Sudah Selesai Pendaftaran, Sudah Upload Persyaratan-Persyaratan, Sudah selesai pembayaran, sudah selesai tes minat bakat , dll, lalu apa lagi yang harus dilakukan ustadz ?',
            'faq_jawaban' => 'Kalau sudah selesai semua, mungkin bisa untuk prepare/mempersiapkan yang bersifat fisik seperti atribut, pakaian barang-barang, berkas-berkas, kesehatan, dll',
        ]);
        // 22
        Faq::create([
            'faq_pertanyaan' => 'apa yang saya harus lakukan jika memilih hanya 1 tahun saja di unida',
            'faq_jawaban' => 'Yang harus dilakukan itu sama layaknya teman-teman yang lain, seperti pendaftaran online, dll',
        ]);
        // 23
        Faq::create([
            'faq_pertanyaan' => 'keberangkatan ke unida adakah bareng konsulat ?',
            'faq_jawaban' => 'dari Panitia Ospek sendiri tidak menyediakan dan tidak mengurus hal seperti itu, mungkin bisa di konsultasikan ke konsulat nya masing-masing',
        ]);
        // 24
        Faq::create([
            'faq_pertanyaan' => 'Kenapa ketika memilih prodi hanya muncul 3 prodi : Ekonomi Islam, Hubungan Internasional, Pendidikan Bahasa Arab ?',
            'faq_jawaban' => 'Mungkin Karena anda memilih "Yes" ketika ditanya apakah anda ingin mengambil Kelas Internasional... ',
        ]);
        // 25
        Faq::create([
            'faq_pertanyaan' => 'Kenapa muncul tagihan Rp. 250.000 untuk pendaftaran non-kmi, padahal anak saya lulusan kmi ?',
            'faq_jawaban' => 'Segala permasalahan pembayaran silahkan berkonsultasi pada bagian keuangan UNIDA, kontak nya sudah ada di halaman pembayaran-du <a href="/pembayaran-du">Klik Disini !</a>',
        ]);
        // 26
        Faq::create([
            'faq_pertanyaan' => 'Apakah wajib mencetak kartu tanda registrasi yang ada di Admisi ? apakah harus melunasi seluruh tagihan dulu baru bisa cetak ? bagaimana jika saya tidak bisa mencetaknya ?',
            'faq_jawaban' => 'Ya, wajib mencetak dan print out kartu tanda registrasi bagi yang sudah bisa mencetak nya, adapun yang belum bisa / terkendala mencetaknya harap membawa bukti transfer untuk pembayaran yang sudah dibayarkan, dan insyaallah sistemnya akan segera diperbaiki agar semua nya dapat mencetak nya',
        ]);
        // 27
        Faq::create([
            'faq_pertanyaan' => 'Ustadz, bagaimana nanti anak2 untuk uang jajannya dan tabungannya , apakah memakai TabSis atau rekening masing2?',
            'faq_jawaban' => 'Mahasiswa membawa kartu atm / rekening masing-masing untuk tabungan dan jajan nya',
        ]);
        // 28
        Faq::create([
            'faq_pertanyaan' => 'Ustadz, kalau untuk ATM/rekening apakah harus yang tertentu atau bebas apa saja ?',
            'faq_jawaban' => 'bebas, apa saja boleh',
        ]);
        // 29
        Faq::create([
            'faq_pertanyaan' => 'Apakah di dalam kampus ada ATM ? ATM yang terdekat apa ?',
            'faq_jawaban' => 'di kampus belum ada ATM tapi ada AgenBriLink, ATM Terdekat dari kampus adalah ATM BRI',
        ]);
        // 30
        Faq::create([
            'faq_pertanyaan' => 'Tadz, untuk Asrama Siman (putra) satu kamar berapa orang ?',
            'faq_jawaban' => 'sekitar belasan',
        ]);
    }
}
