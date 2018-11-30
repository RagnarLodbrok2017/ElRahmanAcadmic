<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type')->insert(array(
            array(
                'name' => 'حضانة',
                'description' => 'this is a type',
            ),
            array(
                'name' => 'سنتر',
                'description' => 'this is a type',
            ),
            array(
                'name' => 'تحفيظ',
                'description' => 'this is a type',
            ),
            array(
                'name' => 'دار استضافة',
                'description' => 'this is a type',
            ),
            array(
                'name' => 'أخرى',
                'description' => 'this is a type',
            ),
        ));
    }
}
