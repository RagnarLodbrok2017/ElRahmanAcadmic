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
                'id' =>'1',
                'name' => 'ابتدائى',
            ),
            array(
                'id' =>'2',
                'name' => 'اعدادى',
            ),
            array(
                'id' =>'3',
                'name' => 'ثانوى',
            ),
        ));
    }
}
