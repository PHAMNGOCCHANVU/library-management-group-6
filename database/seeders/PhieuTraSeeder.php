<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhieuTraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chiTiets = \App\Models\PhieuMuonChiTiet::all();

        $data = [];

        foreach ($chiTiets as $index => $ct) {
            $statusOptions = ['processed', 'pending'];
            $trangThai = $statusOptions[array_rand($statusOptions)];

            $ngayTra = $trangThai === 'processed'
                ? Carbon::now()->subDays(rand(0, 2))->toDateString()
                : Carbon::now()->addDays(rand(0, 3))->toDateString();

            $data[] = [
                'idPhieuMuonChiTiet' => $ct->idPhieuMuonChiTiet,
                'ngayTra' => $ngayTra,
                'trangThaiXuLy' => $trangThai,
                'ghiChu' => $trangThai === 'processed' ? 'Đã xử lý' : null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            if (count($data) >= 10) break; 
        }

        DB::table('phieu_tra')->insert($data);
    }
}
