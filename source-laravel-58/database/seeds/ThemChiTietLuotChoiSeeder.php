<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ThemChiTietLuotChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 1;
        while($count < 11) {
            echo "Them ctlt choi thu " . $count . "\n";
            App\ChiTietLuotChoi::create([
                'luot_choi_id' => rand(1, 8),
                'cau_hoi_id'=>  rand(1, 38),
                'phuong_an' => Str::random(1)
            ]);
            $count++;
        }
    }
}
