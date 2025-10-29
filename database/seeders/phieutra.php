<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class phieutra extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phieu_tra')->insert([
            [
                'idPhieuMuonChiTiet' => 1,
                'ngayTra' => '2025-01-19',
                'trangThaiXuLy' => 'processed',
                'ghiChu' => 'Trả đúng hạn',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idPhieuMuonChiTiet' => 2,
                'ngayTra' => '2025-02-18',
                'trangThaiXuLy' => 'late_return',
                'ghiChu' => 'Trả trễ 3 ngày',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idPhieuMuonChiTiet' => 3,
                'ngayTra' => '2025-03-09',
                'trangThaiXuLy' => 'processed',
                'ghiChu' => 'Trả sớm 1 ngày',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
