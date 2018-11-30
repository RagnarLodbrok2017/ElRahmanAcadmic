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
                'discount' => 0,
            ),
            array(
                'name' => 'يتيم الأب',
                'discount' => 0,
            ),
            array(
                'name' => 'يتيم الأم',
                'discount' => 0,
            ),
            array(
                'id' =>'4',
                'name' => 'يتيم الأثنين',
                'discount' => 0,
            ),
        ));
    }
}
