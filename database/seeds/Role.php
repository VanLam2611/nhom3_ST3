<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'role_name' => 'Member'
        ]);
        DB::table('role')->insert([
            'role_name' => 'Normal'
        ]);
        DB::table('role')->insert([
            'role_name' => 'System'
        ]);
        DB::table('role')->insert([
            'role_name' => 'admin'
        ]);
    }
}
