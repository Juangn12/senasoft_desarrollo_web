<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Jugador']);

        Permission::create(['name' => 'cards'])->syncRoles([$role1]);
        Permission::create(['name' => 'cards.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'cards.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'cards.show'])->syncRoles([$role1]);
        Permission::create(['name' => 'cards.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'cards.destroy'])->syncRoles([$role1]);
    }
}
