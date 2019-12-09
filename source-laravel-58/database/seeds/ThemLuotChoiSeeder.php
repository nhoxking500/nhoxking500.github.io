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
        	['nguoi_choi_id'=>1,
        	'so_cau'=>5,
            'diem'=>'5000',
        	'ngay_gio'=>'27/04/2019']
        ]);
        DB::table('luot_choi')->insert([
        	['nguoi_choi_id'=>2,
        	'so_cau'=>10,
            'diem'=>'10000',
        	'ngay_gio'=>'30/05/2019']
        ]);
        DB::table('luot_choi')->insert([
        	['nguoi_choi_id'=>3,
        	'so_cau'=>6,
            'diem'=>'6000',
        	'ngay_gio'=>'12/11/2019']
        ]);
        DB::table('luot_choi')->insert([
        	['nguoi_choi_id'=>4,
        	'so_cau'=>11,
            'diem'=>'11000',
        	'ngay_gio'=>'13/11/2019']
        ]);
        DB::table('luot_choi')->insert([
        	['nguoi_choi_id'=>5,
        	'so_cau'=>8,
            'diem'=>'8000',
        	'ngay_gio'=>'10/10/2019']
        ]);
        DB::table('luot_choi')->insert([
        	['nguoi_choi_id'=>8,
        	'so_cau'=>3,
            'diem'=>'3000',
        	'ngay_gio'=>'15/10/2019']
        ]);
    }
}
