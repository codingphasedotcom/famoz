<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RepostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reposts')->insert([
            'post_id' => 3,
            'user_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
