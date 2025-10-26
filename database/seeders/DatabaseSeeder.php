<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DanhMucSeeder::class,    
            NguoiDungSeeder::class,  
            SachSeeder::class,      
            PhieuMuonSeeder::class, 
            PhieuMuonChiTietSeeder::class, 
            PhieuTraSeeder::class,   
            DatChoSeeder::class,    
            PhatSeeder::class,       
            ThongBaoSeeder::class,   
        ]);
    }


}
