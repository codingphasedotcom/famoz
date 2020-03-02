<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user->title = request('title');
        // $user->post_type_id = 1;
        // $user->description = request('description');
        // $user->youtube_id = getYoutubeId(request('youtube_url'));
        // $user->user_id = Auth::user()->id;
        // $user->image_url = '<img src="https://img.youtube.com/vi/'.getYoutubeId(request('youtube_url')).'/hqdefault.jpg">';
        DB::table('posts')->insert([
            'title' => 'Ozuna - 100 Preguntas',
            'user_id' => 1,
            'youtube_id' => 'Nz8cbsTMN4I',
            'image_url' => 'https://img.youtube.com/vi/Nz8cbsTMN4I/hqdefault.jpg',
            'description' => '100 Preguntas Official music video of Ozuna
            #Ozuna #100Preguntas #NuevaMusica
            Listen to my new song on your favorite platform:
            https://orcd.co/ozuna100preguntas
            Subscribe to my channel: https://goo.gl/ngGDr2
            Follow Me:  
            Instagram: https://www.instagram.com/ozuna
            Facebook: https://www.facebook.com/ozunapr
            Twitter: https://twitter.com/ozunapr',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('posts')->insert([
            'title' => 'Ozuna - Se preparo',
            'user_id' => 1,
            'youtube_id' => 'KWGrPNqz4uc',
            'image_url' => 'https://img.youtube.com/vi/KWGrPNqz4uc/hqdefault.jpg',
            'description' => '100 Preguntas Official music video of Ozuna
            #Ozuna #100Preguntas #NuevaMusica
            Listen to my new song on your favorite platform:
            https://orcd.co/ozuna100preguntas
            Subscribe to my channel: https://goo.gl/ngGDr2
            Follow Me:  
            Instagram: https://www.instagram.com/ozuna
            Facebook: https://www.facebook.com/ozunapr
            Twitter: https://twitter.com/ozunapr',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('posts')->insert([
            'title' => 'Badbunny - Caro',
            'user_id' => 2,
            'youtube_id' => 'bg64AFnRnkc',
            'image_url' => 'https://img.youtube.com/vi/bg64AFnRnkc/hqdefault.jpg',
            'description' => 'Caro - Bad Bunny
            DESCARGAR: http://rimas.io/X100PRE
            Spotify: http://spoti.fi/2xQk6CX
            Apple Music: http://apple.co/2f52tr9
            Follow Me / Sigueme en:',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
