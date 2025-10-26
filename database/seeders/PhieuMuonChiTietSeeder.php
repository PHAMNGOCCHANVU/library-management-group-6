<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhieuMuonChiTietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $phieuMuons = \App\Models\PhieuMuon::all();
        $books = \App\Models\Sach::all();

        $data = [];

        // Giả lập mỗi phiếu mượn mượn 1 cuốn sách khác nhau
        for ($i = 0; $i < 10; $i++) {
            $phieu = $phieuMuons[$i % $phieuMuons->count()];
            $book = $books[$i % $books->count()];

            $borrowed = rand(0, 1) === 0; // 50% returned, 50% borrowed

            $data[] = [
                'idPhieuMuon' => $phieu->idPhieuMuon,
                'idSach' => $book->idSach,
                'borrow_date' => Carbon::now()->subDays(rand(1, 10))->toDateString(),
                'due_date' => Carbon::now()->addDays(rand(5, 20))->toDateString(),
                'return_date' => $borrowed ? Carbon::now()->subDays(rand(0, 2))->toDateString() : null,
                'trangThaiCT' => $borrowed ? 'returned' : 'borrowed',
                'ghiChu' => $borrowed ? 'Đã trả sách' : 'Sách đang mượn',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('phieu_muon_chi_tiet')->insert($data);
    }
}
