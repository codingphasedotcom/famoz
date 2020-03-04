<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccountTypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PostTypeSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(RepostSeeder::class);
    }
}
