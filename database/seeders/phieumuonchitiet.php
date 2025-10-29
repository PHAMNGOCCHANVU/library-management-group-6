<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class phieumuonchitiet extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phieu_muon_chi_tiet')->insert([
            [
                'idPhieuMuon' => 1, // tồn tại trong phieu_muon
                'idSach' => 1,
                'borrow_date' => '2025-01-10',
                'due_date' => '2025-01-20',
                'return_date' => '2025-01-19',
                'trangThaiCT' => 'returned',
                'ghiChu' => 'Trả sớm 1 ngày',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idPhieuMuon' => 2, // tồn tại trong phieu_muon
                'idSach' => 2,
                'borrow_date' => '2025-02-05',
                'due_date' => '2025-02-15',
                'return_date' => null, // chưa trả
                'trangThaiCT' => 'borrowed',
                'ghiChu' => 'Chưa trả',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idPhieuMuon' => 3, // tồn tại trong phieu_muon
                'idSach' => 3,
                'borrow_date' => '2025-03-01',
                'due_date' => '2025-03-10',
                'return_date' => '2025-03-09',
                'trangThaiCT' => 'returned',
                'ghiChu' => 'Đã trả đúng hạn',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
