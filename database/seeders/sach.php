<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sach extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sach')->insert([
            [
                'maSach' => 'S001',
                'tenSach' => 'Lập trình C++ cơ bản',
                'tacGia' => 'Nguyễn Văn A',
                'namXuatBan' => 2020,
                'soLuong' => 10,
                'idDanhMuc' => 1,
                'moTa' => 'Giới thiệu cơ bản về ngôn ngữ lập trình C++.',
                'vitri' => 'Kệ A1',
                'trangThai' => 'available',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'maSach' => 'S002',
                'tenSach' => 'Cấu trúc dữ liệu và Giải thuật',
                'tacGia' => 'Trần Thị B',
                'namXuatBan' => 2021,
                'soLuong' => 5,
                'idDanhMuc' => 2,
                'moTa' => 'Giáo trình nâng cao về cấu trúc dữ liệu và thuật toán.',
                'vitri' => 'Kệ B2',
                'trangThai' => 'available',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'maSach' => 'S003',
                'tenSach' => 'Lập trình Web với Laravel',
                'tacGia' => 'Phạm Văn C',
                'namXuatBan' => 2023,
                'soLuong' => 8,
                'idDanhMuc' => 1,
                'moTa' => 'Hướng dẫn chi tiết phát triển ứng dụng web bằng Laravel framework.',
                'vitri' => 'Kệ C1',
                'trangThai' => 'available',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
