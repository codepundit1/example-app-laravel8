<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;   //import db
use Illuminate\Support\Str;          //support str


class membersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        for ($i = 1; $i < 10; $i++) {

            DB::table('members')
                ->insert([
                    'name' => Str::random(10),
                    'email' => Str::random(10) . '@gmail.com',
                    'address' => Str::random(10)

                ]);
        }







        // DB::table('members')-> insert([
        //     'name'=>Str::random(10),
        //     'email'=>Str::random(10).'@gmail.com',
        //     'address'=>Str::random(10),
        // ]);


        // php artisan db:seed --class=class name (membersSeed)
        //
    }
}
