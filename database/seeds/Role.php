<?php

use Illuminate\Database\Seeder;

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
    }
}
