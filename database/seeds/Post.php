<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'title' => 'Mark',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed fugit ipsa cumque at, voluptatum excepturi obcaecati voluptatibus, in nobis qui velit. Nemo, molestiae laborum? Commodi natus repellat facere eveniet voluptatum.',
            'user_id' => 1,
            'type_id' => 2,
        ]);
        DB::table('post')->insert([
            'title' => 'Star',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed fugit ipsa cumque at, voluptatum excepturi obcaecati voluptatibus, in nobis qui velit. Nemo, molestiae laborum? Commodi natus repellat facere eveniet voluptatum.',
            'user_id' => 2,
            'type_id' => 2,
        ]);
        DB::table('post')->insert([
            'title' => 'How to update composer?',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed fugit ipsa cumque at, voluptatum excepturi obcaecati voluptatibus, in nobis qui velit. Nemo, molestiae laborum? Commodi natus repellat facere eveniet voluptatum.',
            'user_id' => 2,
            'type_id' => 2,
        ]);
    }
}
