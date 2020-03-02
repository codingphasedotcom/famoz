<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'username' => 'ozuna',
            'full_name' => 'ozuna',
            'email' => 'ozuna@gmail.com',
            'password' => Hash::make('12345678'),
            'description' => 'OZUNA 🇵🇷🌎🇩🇴🧸 N I B I R U ☄️☄️ MANAGER @rebecaleon orcd.co/ozuna100preguntas/youtube ozuna',
            'image_url' => 'https://i1.sndcdn.com/avatars-000720436693-hfwlc7-t500x500.jpg',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'username' => 'badbunny',
            'full_name' => 'Bad Bunny',
            'email' => 'badbunny@gmail.com',
            'password' => Hash::make('12345678'),
            'description' => 'BAD | BUNNY youtu.be/PC0GvyEIXfk',
            'image_url' => 'https://factceleb.com/data/biography/1563429317.3187.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'username' => 'tainy',
            'full_name' => 'Tainy',
            'email' => 'tainy@gmail.com',
            'password' => Hash::make('12345678'),
            'description' => '@neon16.co Kid that makes beats. #TheKidsOfReggaeton soon. #NADA Out Now pfl.ink/74vyt_ngcl',
            'image_url' => 'https://files.lafm.com.co/assets/public/styles/image_631x369/public/2019-10/tainy_839_0.jpg?itok=r-JB6ohX',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('account_type_user')->insert([
            'account_type_id' => 3,
            'user_id' => 1,
        ]);
        DB::table('account_type_user')->insert([
            'account_type_id' => 3,
            'user_id' => 2,
        ]);
        DB::table('account_type_user')->insert([
            'account_type_id' => 2,
            'user_id' => 3,
        ]);
        DB::table('followers')->insert([
            'user_id' => 1,
            'follower_id' => 2,
        ]);
        DB::table('followers')->insert([
            'user_id' => 1,
            'follower_id' => 3,
        ]);
        DB::table('followers')->insert([
            'user_id' => 1,
            'follower_id' => 3,
        ]);
        DB::table('followers')->insert([
            'user_id' => 2,
            'follower_id' => 3,
        ]);
        DB::table('followers')->insert([
            'user_id' => 3,
            'follower_id' => 1,
        ]);
    }
}
