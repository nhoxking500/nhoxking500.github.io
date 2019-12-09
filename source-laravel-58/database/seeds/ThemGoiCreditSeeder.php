<?php

use Illuminate\Database\Seeder;

class ThemGoiCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goi_credit')->insert([
        	['ten_goi'=>'Gói 1',
        	'credit'=>1000,
        	'so_tien'=>100000]
        ]);
        DB::table('goi_credit')->insert([
        	['ten_goi'=>'Gói 2',
        	'credit'=>2000,
        	'so_tien'=>200000]
        ]);
        DB::table('goi_credit')->insert([
        	['ten_goi'=>'Gói 3',
        	'credit'=>3000,
        	'so_tien'=>300000]
        ]);
        DB::table('goi_credit')->insert([
        	['ten_goi'=>'Gói 4',
        	'credit'=>4000,
        	'so_tien'=>400000]
        ]);
        DB::table('goi_credit')->insert([
        	['ten_goi'=>'Gói 5',
        	'credit'=>5000,
        	'so_tien'=>500000]
        ]);
    }
}
