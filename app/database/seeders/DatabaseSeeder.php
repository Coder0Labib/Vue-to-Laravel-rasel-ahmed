<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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
        $user =new User();
        $user->name = 'labib';
        $user->email = 'hi@labib.me';
        $user->password = bcrypt( value: "password") ;
        $user->save();
    }
}
