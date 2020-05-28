<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_groups')->insert([
            'title_en' => 'Super Admin',
            'title_bn' => 'সুপার এডমিন',
            'created_by' => '1',
            'updated_by' => '',
            'status' => 1,

        ]);

        DB::table('user_groups')->insert([
            'title_en' => 'Admin',
            'title_bn' => 'এডমিন',
            'created_by' => '1',
            'updated_by' => '',
            'status' => 1,

        ]);
    }
}
