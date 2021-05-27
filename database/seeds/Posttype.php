<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Posttype extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //table post type
        DB::table('posttype')->insert([
            'type_name' => 'Education'
        ]);
        DB::table('posttype')->insert([
            'type_name' => 'Sport'
        ]);
    }
}
