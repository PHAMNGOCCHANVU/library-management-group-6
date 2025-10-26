<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NguoiDungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            // 2 admin
            [
                'hoTen' => 'Admin 1',
                'email' => 'admin1@example.com',
                'matKhau' => Hash::make('123456'),
                'soDienThoai' => '0123456781',
                'diaChi' => 'Hà Nội',
                'vaiTro' => 'admin',
                'trangThai' => 1,
                'ngayDangKy' => now(),
            ],
            [
                'hoTen' => 'Admin 2',
                'email' => 'admin2@example.com',
                'matKhau' => Hash::make('123456'),
                'soDienThoai' => '0123456782',
                'diaChi' => 'Hà Nội',
                'vaiTro' => 'admin',
                'trangThai' => 1,
                'ngayDangKy' => now(),
            ],
            // 8 reader
            [
                'hoTen' => 'Người đọc 1',
                'email' => 'reader1@example.com',
                'matKhau' => Hash::make('123456'),
                'soDienThoai' => '0987654321',
                'diaChi' => 'TP. HCM',
                'vaiTro' => 'reader',
                'trangThai' => 1,
                'ngayDangKy' => now(),
            ],
            [
                'hoTen' => 'Người đọc 2',
                'email' => 'reader2@example.com',
                'matKhau' => Hash::make('123456'),
                'soDienThoai' => '0987654322',
                'diaChi' => 'Đà Nẵng',
                'vaiTro' => 'reader',
                'trangThai' => 1,
                'ngayDangKy' => now(),
            ],
            [
                'hoTen' => 'Người đọc 3',
                'email' => 'reader3@example.com',
                'matKhau' => Hash::make('123456'),
                'soDienThoai' => '0987654323',
                'diaChi' => 'Hải Phòng',
                'vaiTro' => 'reader',
                'trangThai' => 1,
                'ngayDangKy' => now(),
            ],
            [
                'hoTen' => 'Người đọc 4',
                'email' => 'reader4@example.com',
                'matKhau' => Hash::make('123456'),
                'soDienThoai' => '0987654324',
                'diaChi' => 'Cần Thơ',
                'vaiTro' => 'reader',
                'trangThai' => 1,
                'ngayDangKy' => now(),
            ],
            [
                'hoTen' => 'Người đọc 5',
                'email' => 'reader5@example.com',
                'matKhau' => Hash::make('123456'),
                'soDienThoai' => '0987654325',
                'diaChi' => 'Huế',
                'vaiTro' => 'reader',
                'trangThai' => 1,
                'ngayDangKy' => now(),
            ],
            [
                'hoTen' => 'Người đọc 6',
                'email' => 'reader6@example.com',
                'matKhau' => Hash::make('123456'),
                'soDienThoai' => '0987654326',
                'diaChi' => 'Nha Trang',
                'vaiTro' => 'reader',
                'trangThai' => 1,
                'ngayDangKy' => now(),
            ],
            [
                'hoTen' => 'Người đọc 7',
                'email' => 'reader7@example.com',
                'matKhau' => Hash::make('123456'),
                'soDienThoai' => '0987654327',
                'diaChi' => 'Vinh',
                'vaiTro' => 'reader',
                'trangThai' => 1,
                'ngayDangKy' => now(),
            ],
            [
                'hoTen' => 'Người đọc 8',
                'email' => 'reader8@example.com',
                'matKhau' => Hash::make('123456'),
                'soDienThoai' => '0987654328',
                'diaChi' => 'Phú Quốc',
                'vaiTro' => 'reader',
                'trangThai' => 1,
                'ngayDangKy' => now(),
            ],
        ];

        foreach ($users as $user) {
            DB::table('nguoi_dung')->updateOrInsert(
                ['email' => $user['email']],
                $user
            );
        }
    }
}
