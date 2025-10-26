<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $danhMuc = [
            'Tiểu thuyết',
            'Văn học Việt Nam',
            'Phát triển bản thân',
            'Thiếu nhi',
            'Khoa học',
            'Lịch sử',
            'Công nghệ',
            'Du lịch',
            'Ẩm thực',
            'Sách kinh doanh',
        ];

        foreach ($danhMuc as $tenDanhMuc) {
            DB::table('danh_muc')->updateOrInsert(
                ['tenDanhMuc' => $tenDanhMuc],
                ['created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}
