<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class thongbao extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('thong_bao')->insert([
            [
                'idNguoiDung' => 1,
                'idSach' => 1,
                'idPhieuMuon' => 1,
                'idPhat' => null,
                'idDatCho' => null,
                'idPhieuTra' => null,
                'loaiThongBao' => 'muon_sach',
                'noiDung' => 'Ban da muon sach "Lap trinh C++". Vui long tra dung han truoc ngay 30/10/2025.',
                'thoiGianGui' => now(),
                'trangThai' => 'unread',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idNguoiDung' => 2,
                'idSach' => 2,
                'idPhieuMuon' => 2,
                'idPhat' => null,
                'idDatCho' => null,
                'idPhieuTra' => 1,
                'loaiThongBao' => 'tre_han',
                'noiDung' => 'Ban da tra sach tre 3 ngay. Vui long nop phat 15,000 VND.',
                'thoiGianGui' => now(),
                'trangThai' => 'unread',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idNguoiDung' => 3,
                'idSach' => 3,
                'idPhieuMuon' => 3,
                'idPhat' => 2,
                'idDatCho' => null,
                'idPhieuTra' => 2,
                'loaiThongBao' => 'thanh_toan',
                'noiDung' => 'Ban da thanh toan tien phat thanh cong. Cam on ban da hop tac!',
                'thoiGianGui' => now(),
                'trangThai' => 'read',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
