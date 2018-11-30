<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classroom')->insert(array(
            array(
                'name' => 'الفصل الأول 1',
            ),
            array(
                'name' => 'الفصل الثانى 2',
            ),
            array(
                'name' => 'الفصل الثالث 3',
            ),
            array(
                'name' => 'الفصل الرابع 4',
            ),
            array(
                'name' => 'الفصل الخامس 5',
            ),
        ));
    }
}
