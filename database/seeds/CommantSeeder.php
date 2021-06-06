<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CommantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('commant')->insert([
            'content' => 'You should Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus qui eveniet ex est commodi facilis facere hic aspernatur cupiditate molestias! Dolorem omnis sit eius impedit, labore eaque sapiente inventore ratione.',
            'post_id' => 1,
        ]);
        DB::table('commant')->insert([
            'content' => 'You should Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus qui eveniet ex est commodi facilis facere hic aspernatur cupiditate molestias! Dolorem omnis sit eius impedit, labore eaque sapiente inventore ratione.',
            'post_id' => 2,
        ]);
        DB::table('commant')->insert([
            'content' => 'You should Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus qui eveniet ex est commodi facilis facere hic aspernatur cupiditate molestias! Dolorem omnis sit eius impedit, labore eaque sapiente inventore ratione.',
            'post_id' => 2,
        ]);
    }
}
