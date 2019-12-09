<?php

use Illuminate\Database\Seeder;

class ThemLichSuMuaCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lich_su_mua_credit')->insert([
        	['nguoi_choi_id'=>1,
        	'goi_credit_id'=>1,
            'credit'=>1000,
        	'so_tien'=>100000]
        ]);
        DB::table('lich_su_mua_credit')->insert([
            ['nguoi_choi_id'=>2,
            'goi_credit_id'=>2,
            'credit'=>2000,
            'so_tien'=>200000]
        ]);
        DB::table('lich_su_mua_credit')->insert([
            ['nguoi_choi_id'=>3,
            'goi_credit_id'=>3,
            'credit'=>3000,
            'so_tien'=>300000]
        ]);
        DB::table('lich_su_mua_credit')->insert([
            ['nguoi_choi_id'=>4,
            'goi_credit_id'=>4,
            'credit'=>4000,
            'so_tien'=>400000]
        ]);
        DB::table('lich_su_mua_credit')->insert([
            ['nguoi_choi_id'=>5,
            'goi_credit_id'=>1,
            'credit'=>1000,
            'so_tien'=>100000]
        ]);
        DB::table('lich_su_mua_credit')->insert([
            ['nguoi_choi_id'=>6,
            'goi_credit_id'=>1,
            'credit'=>1000,
            'so_tien'=>100000]
        ]);
        DB::table('lich_su_mua_credit')->insert([
            ['nguoi_choi_id'=>7,
            'goi_credit_id'=>1,
            'credit'=>1000,
            'so_tien'=>100000]
        ]);
        DB::table('lich_su_mua_credit')->insert([
            ['nguoi_choi_id'=>8,
            'goi_credit_id'=>2,
            'credit'=>2000,
            'so_tien'=>200000]
        ]);
        DB::table('lich_su_mua_credit')->insert([
            ['nguoi_choi_id'=>9,
            'goi_credit_id'=>3,
            'credit'=>3000,
            'so_tien'=>300000]
        ]);
        DB::table('lich_su_mua_credit')->insert([
            ['nguoi_choi_id'=>10,
            'goi_credit_id'=>2,
            'credit'=>2000,
            'so_tien'=>200000]
        ]);
    }
}
