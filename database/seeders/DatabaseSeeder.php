<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(2)->create();

        User::factory()->create([
            'name' => 'Tim Fast Legal',
            'email' => 'admin@test.com',
            'username' => 'tim_fastlegal',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@test.com',
            'username' => 'test_user',
            'role' => 'user',
        ]);

        Category::create([
            'name' => 'Pendirian Perusahaan',
            'slug' => 'pendirian-perusahaan',
        ]);

        // Article::create([
        //     'title' => 'Legalitas HKI Merek: Pentingnya Melindungi Identitas Bisnis',
        //     'slug' => 'legalitas-hki-merek-pentingnya-melindungi-identitas-bisnis',
        //     'description' => 'Hak Kekayaan Intelektual (HKI) adalah konsep hukum yang memberikan perlindungan kepada pencipta karya untuk menikmati hak ekonomi dan moral atas hasil karya mereka. Salah satu komponen penting dari HKI adalah merek. Merek merupakan identitas visual yang membantu membedakan produk atau layanan satu perusahaan dari yang lain di pasar. Dalam artikel ini, kita akan membahas tentang Pentingnya sebuah merek dalam suatu bisnis, Bagaimana peraturan Legalitas HKI Merek di Indonesia, PT Fast Legal Indonesia sebagai Jasa Legalitas HKI Merek, dan Pentingnya mempertahankan merek.',
        //     'content' => '<h2>Legalitas HKI Merek di Indonesia</h2><p>Di Indonesia, pengaturan tentang merek diatur dalam Undang-Undang No. 20 Tahun 2016 tentang Merek dan Indikasi Geografis. Undang-undang ini menggantikan UU No. 15 Tahun 2001 yang sebelumnya mengatur tentang merek. Dalam undang-undang tersebut, merek didefinisikan sebagai tanda yang dapat ditampilkan secara grafis berupa gambar, logo, nama, kata, huruf, angka, susunan warna, dalam bentuk dua dimensi dan/atau tiga dimensi, suara, hologram, atau kombinasi dari dua atau lebih unsur tersebut untuk membedakan barang dan/atau jasa yang dihasilkan oleh orang atau badan hukum dalam kegiatan perdagangan barang dan/atau jasa.</p><h2>PT Fast Legal Indonesia sebagai Jasa Legalitas HKI Merek</h2><p>PT Fast Legal Indonesia merupakan perusahaan yang bergerak di jasa konsultan perizinan. Salah satu layanan kami adalah Perizinan Legalitas HKI merek. PT Fast Legal Indonesia memberikan layanan profesional yang dapat membantu individu atau perusahaan dalam mendaftarkan, mengelola, dan melindungi merek dagang mereka. Jasa ini mencakup berbagai layanan, mulai dari konsultasi, pencarian merek, pengurusan dokumen pendaftaran, hingga penyelesaian sengketa terkait merek.</p><h3>Manfaat Menggunakan Jasa PT Fast Legal Indonesia</h3><ul><li><strong>Penghematan Waktu dan Tenaga:</strong> Proses pendaftaran merek bisa menjadi kompleks dan memakan waktu. Dengan menggunakan jasa dari PT Fast Legal Indonesia, pemohon dapat menghemat waktu dan tenaga karena semua proses akan diurus oleh kami.</li><li><strong>Menghindari Kesalahan Administratif:</strong> Dengan memilih jasa PT Fast Legal Indonesia yang berpengalaman, akan memastikan bahwa semua dokumen dan persyaratan administratif terpenuhi dengan benar, sehingga mengurangi risiko penolakan pendaftaran HKI merek.</li><li><strong>Perlindungan Hukum yang Kuat:</strong> PT Fast Legal Indonesia dapat membantu memastikan bahwa merek yang didaftarkan memiliki perlindungan hukum yang kuat, termasuk menangani sengketa atau pelanggaran merek.</li><li><strong>Konsultasi Gratis:</strong> PT Fast Legal Indonesia dalam pelayanannya dapat memberikan konsultasi secara gratis dan memungkinkan bagi pelaku usaha yang ingin berkonsultasi di luar jam kantor serta dapat bertemu secara offline di wilayah Jabodetabek.</li></ul><h2>Pentingnya Mempertahankan Merek</h2><p>Mempertahankan merek yang sudah terdaftar sama pentingnya dengan proses pendaftarannya. Pemilik merek harus terus menggunakan merek tersebut dalam kegiatan perdagangan dan memperpanjang pendaftarannya sebelum masa berlaku habis. Selain itu, pemilik merek juga harus proaktif dalam melindungi mereknya dari pelanggaran dengan cara melakukan tindakan hukum jika terjadi pelanggaran oleh pihak lain.</p><h2>Kesimpulan</h2><p>Legalitas HKI merek adalah aspek penting dalam dunia bisnis yang memberikan perlindungan dan keunggulan kompetitif bagi perusahaan. Dengan mendaftarkan merek, perusahaan tidak hanya melindungi identitas dan reputasinya, tetapi juga memastikan bahwa mereka memiliki hak eksklusif untuk menggunakan merek tersebut dalam kegiatan perdagangan. Pemahaman dan kepatuhan terhadap regulasi merek sangat penting bagi setiap pelaku bisnis di Indonesia. Oleh karena itu, jangan biarkan ide brilian anda diambil oleh orang lain, lindungi merek anda, bangun kepercayaan konsumen, dan dapatkan layanan pendaftaran merek secara profesional dengan tim kami. <strong>Hubungi kami sekarang juga!</strong></p>',
        //     'thumbnail' => '',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'status' => 'publish',
        //     'published_at' => now(),
        // ]);

        // Article::create([
        //     'title' => 'Memahami Legalitas Properti di Indonesia',
        //     'slug' => 'memahami-legalitas-properti-di-indonesia',
        //     'description' => 'Legalitas properti adalah aspek penting yang harus diperhatikan oleh setiap pemilik atau calon pembeli properti di Indonesia. Legalitas ini menjamin hak kepemilikan dan penggunaan properti sesuai dengan hukum yang berlaku. Artikel ini akan membahas berbagai aspek terkait legalitas properti di Indonesia, mulai dari jenis sertifikat hingga prosedur pengecekan legalitas.',
        //     'content' => '<h2>Jenis Sertifikat Properti</h2><ol><li><p><strong>Sertifikat Hak Milik (SHM)</strong></p></li><li><strong>Menghindari Kesalahan Administratif:</strong> Dengan memilih jasa PT Fast Legal Indonesia yang berpengalaman, akan memastikan bahwa semua dokumen dan persyaratan administratif terpenuhi dengan benar, sehingga mengurangi risiko penolakan pendaftaran HKI merek.</li><li><strong>Perlindungan Hukum yang Kuat:</strong> PT Fast Legal Indonesia dapat membantu memastikan bahwa merek yang didaftarkan memiliki perlindungan hukum yang kuat, termasuk menangani sengketa atau pelanggaran merek.</li><li><strong>Konsultasi Gratis:</strong> PT Fast Legal Indonesia dalam pelayanannya dapat memberikan konsultasi secara gratis dan memungkinkan bagi pelaku usaha yang ingin berkonsultasi di luar jam kantor serta dapat bertemu secara offline di wilayah Jabodetabek.</li></ol><h2>Pentingnya Mempertahankan Merek</h2><p>Mempertahankan merek yang sudah terdaftar sama pentingnya dengan proses pendaftarannya. Pemilik merek harus terus menggunakan merek tersebut dalam kegiatan perdagangan dan memperpanjang pendaftarannya sebelum masa berlaku habis. Selain itu, pemilik merek juga harus proaktif dalam melindungi mereknya dari pelanggaran dengan cara melakukan tindakan hukum jika terjadi pelanggaran oleh pihak lain.</p><h2>Kesimpulan</h2><p>Legalitas HKI merek adalah aspek penting dalam dunia bisnis yang memberikan perlindungan dan keunggulan kompetitif bagi perusahaan. Dengan mendaftarkan merek, perusahaan tidak hanya melindungi identitas dan reputasinya, tetapi juga memastikan bahwa mereka memiliki hak eksklusif untuk menggunakan merek tersebut dalam kegiatan perdagangan. Pemahaman dan kepatuhan terhadap regulasi merek sangat penting bagi setiap pelaku bisnis di Indonesia. Oleh karena itu, jangan biarkan ide brilian anda diambil oleh orang lain, lindungi merek anda, bangun kepercayaan konsumen, dan dapatkan layanan pendaftaran merek secara profesional dengan tim kami. <strong>Hubungi kami sekarang juga!</strong></p>',
        //     'thumbnail' => '',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'status' => 'publish',
        //     'published_at' => now(),
        // ]);

        // Article::factory(100)->create();
    }
}
