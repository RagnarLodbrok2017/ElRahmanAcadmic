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
                'name' => 'KG 1',
            ),
            array(
                'name' => 'KG 2',
            ),
        ));
    }
}
