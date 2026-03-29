<?php

namespace App\Http\Controllers;

class RamadhanController extends Controller
{
    // Data statis kegiatan Ramadhan
    private function getRamadhanActivities()
    {
        return [
            [
                'id' => 1,
                'title' => 'Kajian Ramadhan',
                'description' => 'Kajian rutin setiap malam setelah tarawih bersama Ustadz Ahmad.',
                'image' => 'kajian.jpg',
                'date' => '2025-03-15',
                'category' => 'ramadhan'
            ],
            [
                'id' => 2,
                'title' => 'Pembagian Takjil',
                'description' => 'Membagikan takjil gratis di perempatan jalan utama.',
                'image' => 'takjil.jpg',
                'date' => '2025-03-20',
                'category' => 'ramadhan'
            ],
            [
                'id' => 3,
                'title' => 'Tadarus Al-Qur\'an',
                'description' => 'Kegiatan tadarus bersama setiap ba\'da Ashar.',
                'image' => 'tadarus.jpg',
                'date' => '2025-03-18',
                'category' => 'ramadhan'
            ]
        ];
    }

    // Data statis kegiatan Lebaran
    private function getLebaranActivities()
    {
        return [
            [
                'id' => 4,
                'title' => 'Shalat Idul Fitri',
                'description' => 'Shalat Id berjamaah di lapangan desa.',
                'image' => 'idul-fitri.jpg',
                'date' => '2025-04-01',
                'category' => 'lebaran'
            ],
            [
                'id' => 5,
                'title' => 'Halal Bihalal',
                'description' => 'Acara halal bihalal antar warga dan makan bersama.',
                'image' => 'halal-bihalal.jpg',
                'date' => '2025-04-02',
                'category' => 'lebaran'
            ]
        ];
    }

    public function index()
    {
        $activities = $this->getRamadhanActivities();
        return view('ramadhan.index', compact('activities'));
    }

    public function lebaran()
    {
        $activities = $this->getLebaranActivities();
        return view('ramadhan.lebaran', compact('activities'));
    }

    public function about()
    {
        return view('ramadhan.about');
    }

    public function detail($id)
    {
        // Gabungkan semua kegiatan
        $allActivities = array_merge($this->getRamadhanActivities(), $this->getLebaranActivities());
        $activity = collect($allActivities)->firstWhere('id', $id);

        if (!$activity) {
            abort(404);
        }

        return view('ramadhan.detail', compact('activity'));
    }
}
