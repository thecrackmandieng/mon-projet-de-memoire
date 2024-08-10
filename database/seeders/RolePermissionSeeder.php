<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Crée des permissions
        Permission::create(['name' => 'view propositions']);
        Permission::create(['name' => 'validate propositions']);

        // Crée des rôles et leur assigne des permissions
        $adminRole = Role::create(['name' => 'professor']);
        $adminRole->givePermissionTo('view propositions');
        $adminRole->givePermissionTo('validate propositions');

        // Assigner le rôle admin à un utilisateur spécifique
        $user = \App\Models\User::find(1); // Remplacez 1 par l'ID de l'utilisateur admin
        $user->assignRole($adminRole);
    }
}
