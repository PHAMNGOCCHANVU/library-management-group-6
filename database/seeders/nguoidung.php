<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class nguoidung extends Seeder
{
    public function run(): void
    {
        DB::table('nguoi_dung')->insert([
            [
                'idNguoiDung' => 1,
                'hoTen' => 'Nguyen Van A',
                'email' => 'user1@example.com',
                'matKhau' => Hash::make('123456'),
                'soDienThoai' => '0905123456',
                'diaChi' => '123 Nguyen Trai, Q1, TP.HCM',
                'vaiTro' => 'reader',
                'ngayDangKy' => now(),
                'trangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idNguoiDung' => 2,
                'hoTen' => 'Tran Thi B',
                'email' => 'user2@example.com',
                'matKhau' => Hash::make('123456'),
                'soDienThoai' => '0906987654',
                'diaChi' => '45 Hai Ba Trung, Q3, TP.HCM',
                'vaiTro' => 'reader',
                'ngayDangKy' => now(),
                'trangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idNguoiDung' => 3,
                'hoTen' => 'Le Van C',
                'email' => 'user3@example.com',
                'matKhau' => Hash::make('123456'),
                'soDienThoai' => '0912345678',
                'diaChi' => '78 Le Loi, Q1, TP.HCM',
                'vaiTro' => 'librarian',
                'ngayDangKy' => now(),
                'trangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
