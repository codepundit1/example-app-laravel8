<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  //controller member
use Illuminate\Support\Str;

class CowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i<11; $i++)
        {
            DB::table('cows')
            ->insert([
                'name' => Str:: random(10),
                'color' => Str:: random(10),
                'address' => Str:: random(10),
            ]);
        }
    }
}
