<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class phieumuon extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phieu_muon')->insert([
            [
                'idNguoiDung' => 1,
                'ngayMuon' => '2025-01-10',
                'hanTra' => '2025-01-20',
                'trangThai' => 'approved',
                'ghiChu' => 'Mượn sách lập trình C++',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idNguoiDung' => 2,
                'ngayMuon' => '2025-02-05',
                'hanTra' => '2025-02-15',
                'trangThai' => 'pending',
                'ghiChu' => 'Đang chờ duyệt yêu cầu mượn sách Laravel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idNguoiDung' => 3,
                'ngayMuon' => '2025-03-01',
                'hanTra' => '2025-03-10',
                'trangThai' => 'returned',
                'ghiChu' => 'Đã trả sách đúng hạn',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
