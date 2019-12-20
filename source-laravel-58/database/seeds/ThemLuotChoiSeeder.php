<?php

use Illuminate\Database\Seeder;

class ThemLuotChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('luot_choi')->insert([
        	['nguoi_choi_id'=>2,
        	'so_cau'=>9,
            'diem'=>'6000',
        	'ngay_gio'=>'28/04/2019']
        ]);
        DB::table('luot_choi')->insert([
        	['nguoi_choi_id'=>3,
        	'so_cau'=>9,
            'diem'=>'10000',
        	'ngay_gio'=>'31/05/2019']
        ]);
    }
}
