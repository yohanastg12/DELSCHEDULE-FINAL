<?php

namespace Database\seeds;
use App\Role;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    public function run()
    {
        Role::findOrFail(1)->rolesUsers()->sync(1);
        Role::findOrFail(3)->rolesUsers()->sync(range(2, 80));
        Role::findOrFail(4)->rolesUsers()->sync(range(95, 192));
        Role::findOrFail(5)->rolesUsers()->sync(range(81, 93));
        Role::findOrFail(2)->rolesUsers()->sync(94);
    }
}
   