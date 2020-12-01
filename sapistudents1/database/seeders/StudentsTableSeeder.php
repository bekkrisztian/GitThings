<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Student::factory(10)->create();
        DB::table('students')->insert([
            'program_id'=>'1',
        	'name' => 'Kiss Balazs',
        	'email'=> 'kisbalazs@gmail.com',
        ]);
        DB::table('students')->insert([
            'program_id'=>'1',
        	'name' => 'Nagy Peter',
        	'email'=> 'nagypeter@gmail.com',
        ]);
        DB::table('students')->insert([
            'program_id'=>'1',
            'name' => 'Keksz Fülöp',
            'email'=> 'kfulop@gmail.com',
        ]);
    }
}
