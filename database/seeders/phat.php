<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class phat extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phat')->insert([
            [
                'idPhieuTra' => 1,
                'idPhieuMuonChiTiet' => 1,
                'idNguoiDung' => 1,
                'soNgayTre' => 0,
                'soTienPhat' => 0.00,
                'trangThaiThanhToan' => 'paid',
                'ghiChu' => 'Tra dung han, khong bi phat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idPhieuTra' => 2,
                'idPhieuMuonChiTiet' => 2,
                'idNguoiDung' => 2,
                'soNgayTre' => 3,
                'soTienPhat' => 15000.00,
                'trangThaiThanhToan' => 'pending',
                'ghiChu' => 'Tra tre 3 ngay, phat 5000/ngay',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idPhieuTra' => 3,
                'idPhieuMuonChiTiet' => 3,
                'idNguoiDung' => 3,
                'soNgayTre' => 1,
                'soTienPhat' => 5000.00,
                'trangThaiThanhToan' => 'paid',
                'ghiChu' => 'Tre 1 ngay, da thanh toan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
