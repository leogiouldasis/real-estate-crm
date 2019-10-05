<?php

use App\User as User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SUPER USERS
        // User::create([
        //     'name' => 'Ilias Giouldasis',
        //     'email' => 'leo.giouldasis@gmail.com',
        //     'role' => 'superuser',
        //     'password' => Hash::make('leo12345'),
        // ]);

        // User::create([
        //     'name' => 'Stelios Strongylis',
        //     'email' => 'steliosstrong@gmail.com',
        //     'role' => 'superuser',
        //     'password' => Hash::make('stelios12345'),
        // ]);
        // User::create([
        //     'name' => 'Dionysis Danilatos',
        //     'email' => 'danilatosd@gmail.com',
        //     'role' => 'superuser',
        //     'password' => Hash::make('dionysis12345'),
        // ]);
    }
}
