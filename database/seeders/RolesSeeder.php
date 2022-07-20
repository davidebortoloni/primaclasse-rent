<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_names = ['admin', 'editor', 'reviewer', 'author', 'guest'];

        foreach ($roles_names as $name) {
            $new_role = new Role();
            $new_role->name = $name;
            $new_role->save();
        }
    }
}
