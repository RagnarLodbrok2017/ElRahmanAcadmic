<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stage')->insert(array(
            array(
                'name' => 'ابتدائى',
            ),
            array(
                'name' => 'اعدادى',
            ),
            array(
                'name' => 'ثانوى',
            ),
        ));
    }
}
