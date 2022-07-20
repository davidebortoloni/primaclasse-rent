<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user  = new User();
        $user->fullname = 'admin';
        $user->email = 'admin@admin.it';
        $user->password = bcrypt('password');
        $user->role_id = 1;
        $user->save();
    }
}
