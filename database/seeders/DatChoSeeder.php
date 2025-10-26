<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatChoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = \App\Models\NguoiDung::all();
        $books = \App\Models\Sach::all();

        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $user = $users[$i % $users->count()]; // vòng lặp nếu ít user
            $book = $books[$i % $books->count()]; // vòng lặp nếu ít sách

            $data[] = [
                'idNguoiDung' => $user->idNguoiDung,
                'idSach' => $book->idSach,
                'ngayDat' => Carbon::now()->subDays(rand(1,5))->toDateString(),
                'status' => 'waiting',
                'queueOrder' => rand(1,3),
                'thoiGianHetHan' => Carbon::now()->addDays(rand(5,15))->toDateString(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('dat_cho')->insert($data);
    }
}
