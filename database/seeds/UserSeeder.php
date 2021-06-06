<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Julies',
            'email' => 'babyjulies@gmail.com',
            'password' => bcrypt('11141118'),
            'address' => 'NewYork',
            'role_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Yuki Kazuma',
            'email' => 'JapanInChina@gmail.com',
            'password' => bcrypt('87654321'),
            'address' => 'Japan',
            'role_id' => '2',
        ]);
        DB::table('users')->insert([
            'name' => 'Jacky',
            'email' => 'jack@gmail.com',
            'password' => bcrypt('00000000'),
            'address' => 'America',
            'role_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'yasuo',
            'email' => 'hasagi@gmail.com',
            'password' => bcrypt('00000001'),
            'address' => 'Dau truong chan ly',
            'role_id' => '4',
        ]);
    }
}
