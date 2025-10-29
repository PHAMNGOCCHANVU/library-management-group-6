<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class danhmuc extends Seeder
{
    public function run(): void
    {
        DB::table('danh_muc')->insert([
            [
                'tenDanhMuc' => 'Sách Lập Trình',
                'moTa' => 'Bao gồm các sách về ngôn ngữ lập trình như C++, Java, Python, v.v.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tenDanhMuc' => 'Thuật Toán & Cấu Trúc Dữ Liệu',
                'moTa' => 'Các sách chuyên sâu về thuật toán, cấu trúc dữ liệu, và tối ưu hóa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tenDanhMuc' => 'Khoa Học Máy Tính',
                'moTa' => 'Tài liệu về trí tuệ nhân tạo, hệ điều hành, mạng máy tính và cơ sở dữ liệu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tenDanhMuc' => 'Sách Kỹ Năng Mềm',
                'moTa' => 'Phát triển bản thân, tư duy logic, kỹ năng giao tiếp và làm việc nhóm.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tenDanhMuc' => 'Sách Ngoại Ngữ',
                'moTa' => 'Tài liệu học tiếng Anh, Nhật, Hàn và các ngoại ngữ khác.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
