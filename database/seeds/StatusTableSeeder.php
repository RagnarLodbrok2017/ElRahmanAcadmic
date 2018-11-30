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
                'id' =>'1',
                'name' => 'عادى',
                'discount' => '0.0'
            ),
            array(
                'id' =>'2',
                'name' => 'يتيم الأب',
                'discount' => '0.0'
            ),
            array(
                'id' =>'3',
                'name' => 'يتيم الأم',
                'discount' => '0.0'
            ),
            array(
                'id' =>'4',
                'name' => 'يتيم الأثنين',
                'discount' => '0.0'
            ),
        ));
    }
}
