<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class datcho extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dat_cho')->insert([
            [
                'idNguoiDung' => 1,
                'idSach' => 1,
                'ngayDat' => '2025-10-20',
                'status' => 'waiting',
                'queueOrder' => 1,
                'thoiGianHetHan' => '2025-10-27',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idNguoiDung' => 2,
                'idSach' => 1,
                'ngayDat' => '2025-10-21',
                'status' => 'waiting',
                'queueOrder' => 2,
                'thoiGianHetHan' => '2025-10-28',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idNguoiDung' => 3,
                'idSach' => 2,
                'ngayDat' => '2025-10-19',
                'status' => 'confirmed',
                'queueOrder' => 1,
                'thoiGianHetHan' => '2025-10-26',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
