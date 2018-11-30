<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert(array(
            array(
                'name' => 'عادى',
            ),
            array(
                'name' => 'يتيم الأب',
            ),
            array(
                'name' => 'يتيم الأم',
            ),
            array(
                'name' => 'يتيم الأثنين',
            ),
        ));
    }
}
