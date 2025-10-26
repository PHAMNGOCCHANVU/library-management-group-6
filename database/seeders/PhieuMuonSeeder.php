<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhieuMuonSeeder extends Seeder
{
    public function run()
    {
        // Lấy tất cả phiếu mượn và id sách
        $phieuMuons = DB::table('phieu_muon')->get();
        $sachIds = DB::table('sach')->pluck('idSach');

        $dataChiTiet = [];

        foreach ($phieuMuons as $phieu) {
            // Chọn ngẫu nhiên 1-15 sách
            $randomSaches = $sachIds->random(rand(1, min(15, $sachIds->count())));

            foreach ($randomSaches as $idSach) {
                $dataChiTiet[] = [
                    'idPhieuMuon' => $phieu->idPhieuMuon,
                    'idSach' => $idSach,
                    'trangThaiCT' => ['borrowed', 'returned'][rand(0,1)],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
        }

        // Chèn dữ liệu vào bảng chi tiết phiếu mượn
        DB::table('phieu_muon_chi_tiet')->insert($dataChiTiet);
    }
}
