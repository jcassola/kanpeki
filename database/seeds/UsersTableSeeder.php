<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Joe Doe',
            'username' => 'joedoe',
            'email' => 'joe@joe.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
