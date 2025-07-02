<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    public function run(): void
    {
        $media = [
            [
                'mahasiswa_id' => 1,
                'kategori_id' => 2,
                'judul' => 'Video Pembelajaran Menulis Teks Prosedur',
                'deskripsi' => 'Video animasi edukatif untuk siswa SMP kelas 7 yang menjelaskan langkah-langkah menulis teks prosedur secara efektif dan menyenangkan.',
                'judul_penelitian' => 'Pengembangan Media Video Edukasi untuk Meningkatkan Keterampilan Menulis Teks Prosedur Siswa SMP',
                'tahun_terbit' => 2024,
                'link_media' => 'https://www.youtube.com/watch?v=9LpYkExy3p4'
            ],
            [
                'mahasiswa_id' => 2,
                'kategori_id' => 4,
                'judul' => 'E-Modul Apresiasi Puisi Berbasis Flipbook',
                'deskripsi' => 'Modul ajar digital interaktif untuk SMA yang membahas teori dan praktik dalam mengapresiasi karya sastra puisi.',
                'judul_penelitian' => 'Efektivitas Penggunaan E-Modul Berbasis Flipbook dalam Pembelajaran Apresiasi Puisi',
                'tahun_terbit' => 2024,
                'link_media' => 'https://anyflip.com/txbkh/cygs/'
            ],
            [
                'mahasiswa_id' => 3,
                'kategori_id' => 6,
                'judul' => 'Aplikasi Mobile "Sinau Aksara Jawa"',
                'deskripsi' => 'Aplikasi Android untuk membantu siswa SD belajar mengenal dan menulis Aksara Jawa melalui permainan dan kuis interaktif.',
                'judul_penelitian' => 'Rancang Bangun Aplikasi Pembelajaran Aksara Jawa Berbasis Mobile untuk Siswa Sekolah Dasar',
                'tahun_terbit' => 2024,
                'link_media' => 'https://play.google.com/store/apps/details?id=com.irg.aksarajawa&hl=en_US'
            ],
            [
                'mahasiswa_id' => 4,
                'kategori_id' => 5,
                'judul' => 'Media Interaktif Pengenalan Jaringan Komputer',
                'deskripsi' => 'Media pembelajaran dibuat menggunakan Articulate Storyline untuk menjelaskan konsep dasar jaringan komputer bagi siswa SMK.',
                'judul_penelitian' => 'Pengembangan Media Pembelajaran Interaktif Topik Jaringan Komputer untuk Meningkatkan Hasil Belajar Siswa SMK',
                'tahun_terbit' => 2024,
                'link_media' => 'https://articulate.com/360/storyline'
            ],
            [
                'mahasiswa_id' => 5,
                'kategori_id' => 7,
                'judul' => 'Podcast "English for Daily Conversation"',
                'deskripsi' => 'Seri podcast yang berisi dialog dan tips praktis untuk meningkatkan kemampuan percakapan Bahasa Inggris sehari-hari.',
                'judul_penelitian' => 'Pemanfaatan Podcast sebagai Media Alternatif dalam Meningkatkan Kemampuan Listening Mahasiswa',
                'tahun_terbit' => 2023,
                'link_media' => 'https://open.spotify.com/show/6e92B6CV2a9j4qfV2xS3A3'
            ],
            [
                'mahasiswa_id' => 6,
                'kategori_id' => 3,
                'judul' => 'E-Book Siklus Akuntansi Perusahaan Jasa',
                'deskripsi' => 'Sebuah E-Book yang memvisualisasikan alur siklus akuntansi pada perusahaan jasa agar mudah dipahami.',
                'judul_penelitian' => 'Pengaruh Media E-Book terhadap Pemahaman Konsep Siklus Akuntansi Mahasiswa Pendidikan Ekonomi',
                'tahun_terbit' => 2024,
                'link_media' => 'https://www.studocu.com/id/document/universitas-pembangunan-pancabudi/akuntansi/e-book-siklus-akuntansi-perusahaan-jasa/44583488'
            ],
            [
                'mahasiswa_id' => 7,
                'kategori_id' => 1,
                'judul' => 'Animasi Pembangkit Listrik Sederhana',
                'deskripsi' => 'Video animasi untuk mendemonstrasikan prinsip kerja pembangkit listrik tenaga air skala kecil.',
                'judul_penelitian' => 'Implementasi Animasi Pembangkit Listrik Sederhana untuk Menumbuhkan Minat Belajar Fisika Siswa SMA',
                'tahun_terbit' => 2023,
                'link_media' => 'https://www.youtube.com/watch?v=c3zB14yD8g8'
            ],
            [
                'mahasiswa_id' => 8,
                'kategori_id' => 1,
                'judul' => 'Animasi Kisah Teladan 25 Nabi dan Rasul',
                'deskripsi' => 'Video animasi singkat yang menceritakan kisah-kisah teladan para nabi dan rasul untuk anak-anak TPA/SD.',
                'judul_penelitian' => 'Pengembangan Video Edukasi Kisah Nabi untuk Pendidikan Karakter Anak Usia Dini',
                'tahun_terbit' => 2024,
                'link_media' => 'https://www.youtube.com/watch?v=Y_f_yB03jSg'
            ],
            [
                'mahasiswa_id' => 1,
                'kategori_id' => 5,
                'judul' => 'Analisis Unsur Intrinsik Cerpen Interaktif',
                'deskripsi' => 'Sebuah media berbasis web yang memungkinkan siswa untuk menganalisis unsur intrinsik sebuah cerpen secara interaktif.',
                'judul_penelitian' => 'Pengembangan Media Interaktif Analisis Cerpen untuk Meningkatkan Kemampuan Literasi Kritis Siswa',
                'tahun_terbit' => 2024,
                'link_media' => 'https://wordwall.net/id/resource/35515201/bahasa-indonesia/kuis-unsur-intrinsik-cerpen'
            ],
            [
                'mahasiswa_id' => 3,
                'kategori_id' => 3,
                'judul' => 'Modul Praktikum Desain Grafis dengan Canva',
                'deskripsi' => 'Modul PDF berisi tutorial dan latihan praktik desain grafis dasar menggunakan platform Canva untuk pemula.',
                'judul_penelitian' => 'Penyusunan Modul Ajar Digital Desain Grafis untuk Menunjang Kreativitas Siswa di Era Digital',
                'tahun_terbit' => 2023,
                'link_media' => 'https://www.canva.com/id_id/desain/'
            ],
        ];
        
        foreach ($media as $item) {
            Media::create($item);
        }
    }
}