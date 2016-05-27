<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();

        factory(App\User::class)->create([
            'id' => 1,
            'firstName' => 'Arya',
            'lastName' => 'Stark',
            'email' => 'arya@example.com',
            'password' => bcrypt('secret'),
            ]);

        factory(App\User::class)->create([
            'id' => 2,
            'firstName' => 'Catelyn',
            'lastName' => 'Stark',
            'email' => 'catelyn@example.com',
            'password' => bcrypt('secret'),
            ]);

        factory(App\User::class)->create([
            'id' => 3,
            'firstName' => 'Richard',
            'lastName' => 'Stark',
            'email' => 'richard@example.com',
            'password' => bcrypt('secret'),
            ]);

        factory(App\User::class)->create([
            'id' => 4,
            'firstName' => 'Brandon',
            'lastName' => 'Stark',
            'email' => 'brandon@example.com',
            'password' => bcrypt('secret'),
            ]);

        factory(App\User::class)->create([
            'id' => 5,
            'firstName' => 'Rickon',
            'lastName' => 'Stark',
            'email' => 'rickon@example.com',
            'password' => bcrypt('secret'),
            ]);
    }
}
