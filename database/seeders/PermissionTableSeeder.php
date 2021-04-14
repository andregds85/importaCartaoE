<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'categoria-list',
           'categoria-create',
           'categoria-edit',
           'categoria-delete',
           'pacientes-list',
           'pacientes-create',
           'pacientes-edit',
           'pacientes-delete',
           'arquivo-list',
           'arquivo-create',
           'arquivo-edit',
           'arquivo-delete',
           'unidadHosp-list',
           'unidadHosp-create',
           'unidadHosp-edit',
           'unidadHosp-delete',
           'admin-list',
           'admin-create',
           'admin-edit',
           'admin-delete'
          ];

        









        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
