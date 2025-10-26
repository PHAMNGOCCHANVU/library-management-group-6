<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ThongBaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = \App\Models\NguoiDung::all();
        $sach = \App\Models\Sach::all();
        $phieuMuon = \App\Models\PhieuMuon::all();
        $phat = \App\Models\Phat::all();
        $datCho = \App\Models\DatCho::all();
        $phieuTra = \App\Models\PhieuTra::all();

        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $user = $users[$i % $users->count()];
            $book = $sach[$i % $sach->count()];
            $muon = $phieuMuon[$i % $phieuMuon->count()];
            $fine = $phat[$i % $phat->count()];
            $dat = $datCho[$i % $datCho->count()];
            $tra = $phieuTra[$i % $phieuTra->count()];

            // Chọn loại thông báo ngẫu nhiên
            $loai = ['Thông báo mượn sách', 'Thông báo phạt', 'Thông báo đặt chỗ'];
            $loaiThongBao = $loai[$i % count($loai)];

            $noiDung = match($loaiThongBao) {
                'Thông báo mượn sách' => "Bạn đã mượn sách “{$book->tenSach}”.",
                'Thông báo phạt' => "Bạn bị phạt {$fine->soTienPhat} VNĐ do trả sách muộn.",
                'Thông báo đặt chỗ' => "Sách bạn đặt “{$book->tenSach}” đang chờ lấy.",
            };

            $data[] = [
                'idNguoiDung' => $user->idNguoiDung,
                'idSach' => $book->idSach,
                'idPhieuMuon' => $muon->idPhieuMuon,
                'idPhat' => $fine->idPhat,
                'idDatCho' => $dat->idDatCho,
                'idPhieuTra' => $tra->idPhieuTra,
                'loaiThongBao' => $loaiThongBao,
                'noiDung' => $noiDung,
                'thoiGianGui' => Carbon::now(),
                'trangThai' => 'unread',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('thong_bao')->insert($data);
    }
}
