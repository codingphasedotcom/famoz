<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_types')->insert([
            'title' => 'status',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('post_types')->insert([
            'title' => 'video',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('post_types')->insert([
            'title' => 'song',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
