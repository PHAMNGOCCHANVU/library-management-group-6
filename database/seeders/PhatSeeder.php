<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = \App\Models\NguoiDung::all();
        $phieuTra = \App\Models\PhieuTra::all();
        $phieuMuonChiTiet = \App\Models\PhieuMuonChiTiet::all();

        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $user = $users[$i % $users->count()];
            $tra = $phieuTra[$i % $phieuTra->count()];
            $ct = $phieuMuonChiTiet[$i % $phieuMuonChiTiet->count()];

            // Random số ngày trễ
            $soNgayTre = rand(0, 5);
            $soTienPhat = $soNgayTre * 25000;

            $data[] = [
                'idPhieuTra' => $soNgayTre > 0 ? $tra->idPhieuTra : null,
                'idPhieuMuonChiTiet' => $ct->idPhieuMuonChiTiet,
                'idNguoiDung' => $user->idNguoiDung,
                'soNgayTre' => $soNgayTre,
                'soTienPhat' => $soTienPhat,
                'trangThaiThanhToan' => $soTienPhat > 0 ? 'pending' : 'paid',
                'ghiChu' => $soNgayTre > 0 ? "Trả sách muộn $soNgayTre ngày" : "Trả đúng hạn",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('phat')->insert($data);
    }
}
