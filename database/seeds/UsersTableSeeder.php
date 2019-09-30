<?php

use App\Models\User as User;
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
        User::create([
            'name' => 'Ilias Giouldasis',
            'email' => 'leo.giouldasis@gmail.com',
            'role' => 'superuser',
            'password' => Hash::make('leo12345'),
        ]);
    }
}
