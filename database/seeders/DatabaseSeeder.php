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
    }
}
