<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            'name' => 'taro',
            'mail' => 'taro@taro',
            'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param =[
            'name' => 'hanako',
            'mail' => 'hana@hana',
            'age' => 15,
        ];        
        DB::table('people')->insert($param);

        $param =[
            'name' => 'yumeko',
            'mail' => 'yume@yume',
            'age' => 18,
        ];        
        DB::table('people')->insert($param);
    }
}
