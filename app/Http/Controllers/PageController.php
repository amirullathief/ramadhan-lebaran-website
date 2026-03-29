<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Data kegiatan Ramadhan (tanpa gambar)
    private function getKegiatanRamadhan()
    {
        return [
            [
                'id' => 1,
                'nama' => 'Sahur Bersama Keluarga',
                'deskripsi' => 'Bangun sahur dan makan bersama keluarga.',
                'detail' => 'Setiap hari saya bangun jam 03.30 untuk sahur. Kami makan bersama, lalu membaca doa. Setelah sahur, saya shalat Subuh dan membaca Al-Qur’an sebentar.',
                'tempat' => 'Rumah',
                'waktu' => '03:30 - 04:30',
            ],
            [
                'id' => 2,
                'nama' => 'Tadarus Al-Qur’an',
                'deskripsi' => 'Membaca Al-Qur’an setiap hari setelah Subuh atau setelah Ashar.',
                'detail' => 'Saya menargetkan khatam Al-Qur’an di bulan Ramadhan.',
                'tempat' => 'rumah',
                'waktu' => '05:00 - 06:00 dan 15:30 - 16:30',
            ],
            [
                'id' => 3,
                'nama' => 'Belajar',
                'deskripsi' => 'Aktivitas rutin bekerja atau belajar di siang hari.',
                'detail' => 'Meskipun puasa, saya Berusaha tetap produktif. Pagi sampai siang saya fokus kuliah. Saya usahakan tetap semangat dan tidak mengurangi kualitas.',
                'tempat' => 'Rumah',
                'waktu' => '08:00 - 12:00',
            ],
            [
                'id' => 4,
                'nama' => 'Ngabuburit dan persiapan buka',
                'deskripsi' => 'ngabuburit.',
                'detail' => 'Sore hari saya pergi ngabuburit.',
                'tempat' => 'Rumah',
                'waktu' => '16:00 - 17:30',
            ],
            [
                'id' => 5,
                'nama' => 'Shalat Tarawih',
                'deskripsi' => 'Shalat tarawih berjamaah di masjid atau di rumah.',
                'detail' => 'Setelah Isya, saya shalat tarawih. Biasanya 11 rakaat (8+3 witir). Saya lebih suka berjamaah di masjid karena lebih khusyuk.',
                'tempat' => 'Masjid / Rumah',
                'waktu' => '20:00 - 21:30',
            ],

        ];
    }

    // Data kegiatan Lebaran (tanpa gambar)
    private function getKegiatanLebaran()
    {
        return [
            [
                'id' => 1,
                'nama' => 'Membayar Zakat Fitrah',
                'deskripsi' => 'Menunaikan zakat fitrah untuk diri dan keluarga.',
                'detail' => 'Saya membayar zakat fitrah berupa beras atau uang, biasanya melalui masjid setempat. Dilakukan sebelum shalat Id.',
                'tempat' => 'Masjid / Amil Zakat',
                'waktu' => 'H-2 Idul Fitri',
            ],
            [
                'id' => 2,
                'nama' => 'Shalat Idul Fitri',
                'deskripsi' => 'Shalat Id berjamaah di lapangan atau masjid.',
                'detail' => 'Pagi 1 Syawal, saya pergi ke lapangan desa untuk shalat Id. Setelah shalat, kami saling bermaafan dan bersilaturahmi.',
                'tempat' => 'Lapangan / Masjid',
                'waktu' => '07:00 - 08:00',
            ],
            [
                'id' => 3,
                'nama' => 'Halal Bihalal & Silaturahmi',
                'deskripsi' => 'Mengunjungi keluarga dan tetangga untuk bermaafan.',
                'detail' => 'Setelah shalat Id, saya bersama keluarga mengunjungi sanak saudara dan tetangga. Kami saling memaafkan dan berbagi makanan.',
                'tempat' => 'Rumah keluarga / tetangga',
                'waktu' => '09:00 - selesai',
            ],
            [
                'id' => 4,
                'nama' => 'Makan Khas Lebaran',
                'deskripsi' => 'Menikmati hidangan khas Lebaran bersama keluarga.',
                'detail' => 'Kami menyajikan ketupat, opor ayam, rendang, dan kue-kue kering. Ini menjadi momen kebersamaan yang hangat.',
                'tempat' => 'Rumah',
                'waktu' => 'Siang hari setelah shalat Id',
            ],
            [
                'id' => 5,
                'nama' => 'Mengirim Ucapan Lebaran',
                'deskripsi' => 'Mengirim ucapan selamat Idul Fitri ke teman dan kerabat.',
                'detail' => 'Saya mengirim pesan, video call, atau bertemu langsung untuk saling memaafkan dan mengucapkan selamat.',
                'tempat' => 'Rumah / via digital',
                'waktu' => 'Sepanjang hari',
            ],
        ];
    }

    public function home()
    {
        $ramadhan = array_slice($this->getKegiatanRamadhan(), 0, 3);
        $lebaran = array_slice($this->getKegiatanLebaran(), 0, 3);
        return view('home', compact('ramadhan', 'lebaran'));
    }

    public function ramadhan()
    {
        $kegiatan = $this->getKegiatanRamadhan();
        return view('ramadhan', compact('kegiatan'));
    }

    public function detailRamadhan($id)
    {
        $kegiatan = collect($this->getKegiatanRamadhan())->firstWhere('id', $id);
        if (!$kegiatan) {
            abort(404);
        }
        return view('detail-ramadhan', compact('kegiatan'));
    }

    public function lebaran()
    {
        $kegiatan = $this->getKegiatanLebaran();
        return view('lebaran', compact('kegiatan'));
    }

    public function detailLebaran($id)
    {
        $kegiatan = collect($this->getKegiatanLebaran())->firstWhere('id', $id);
        if (!$kegiatan) {
            abort(404);
        }
        return view('detail-lebaran', compact('kegiatan'));
    }

    public function jadwal()
    {
        // Jadwal harian Ramadhan
        $jadwal = [
            ['waktu' => '04:00', 'kegiatan' => 'Bangun, Sahur, Shalat Subuh'],
            ['waktu' => '05:00', 'kegiatan' => 'Tadarus Al-Qur’an'],
            ['waktu' => '06:00', 'kegiatan' => 'Tidur sejenak / istirahat'],
            ['waktu' => '08:00', 'kegiatan' => 'Belajar/ Kuliah'],
            ['waktu' => '12:00', 'kegiatan' => 'Istirahat siang, tidur jika perlu'],
            ['waktu' => '15:00', 'kegiatan' => 'Tadarus Al-Qur’an'],
            ['waktu' => '16:00', 'kegiatan' => 'Membantu menyiapkan buka puasa atau ngabuburit'],
            ['waktu' => '17:35', 'kegiatan' => 'Buka puasa'],
            ['waktu' => '18:00', 'kegiatan' => 'Shalat Maghrib'],
            ['waktu' => '20:00', 'kegiatan' => 'Shalat Isya & Tarawih'],
            ['waktu' => '21:30', 'kegiatan' => 'Makan malam ringan & istirahat'],
            ['waktu' => '22:00', 'kegiatan' => 'Tidur'],
        ];
        return view('jadwal', compact('jadwal'));
    }

    public function tentang()
    {
        return view('tentang');
    }
}
