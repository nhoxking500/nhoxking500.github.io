<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class ThemQuanTriVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        DB::table('quan_tri_vien')->insert([
            ['ten_dang_nhap'=>'huyduc@gmail.com',
            'mat_khau'=>Hash::make('123456'),
            'ho_ten'=>'TranHuyDuc']
        ]);

    }
}
