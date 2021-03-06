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
        $this->call(UsersTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
    }
}
