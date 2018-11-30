<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level')->insert(array(
            array(
                'id' =>'1',
                'name' => 'KG 1',
            ),
            array(
                'id' =>'2',
                'name' => 'KG 2',
            ),
        ));
    }
}
