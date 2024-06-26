<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            //role
            'role access',
            'role create',
            'role edit',
            'role delete',
            //permission
            'permission access',
            'permission create',
            'permission edit',
            'permission delete',
            //user
            'user access',
            'user create',
            'user edit',
            'user delete',
            //profile
            'profile access',
            'profile edit',
            'profile delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $systemRole = app(Role::class)->findOrCreate(RolesEnum::SYSTEM->value);
        $adminRole = app(Role::class)->findOrCreate(RolesEnum::ADMIN->value);
        $managerRole = app(Role::class)->findOrCreate(RolesEnum::MANAGER->value);
        $userrole = app(Role::class)->findOrCreate(RolesEnum::USER->value);

        $systemRole->givePermissionTo(Permission::all());

        $adminRole->givePermissionTo([
            //role
            'role access',
            'role create',
            'role edit',
            'role delete',
            //user
            'user access',
            'user create',
            'user edit',
            'user delete',
            //profile            
            'profile access',
            'profile edit',
            'profile delete',
        ]);

        $managerRole->givePermissionTo([
            //user
            'user access',
            'user create',
            'user edit',
            //profile
            'profile access',
            'profile edit',
            'profile delete',
        ]);

        $userrole->givePermissionTo([
            //profile
            //'profile access',
            //'profile edit',
        ]);
    }
}
