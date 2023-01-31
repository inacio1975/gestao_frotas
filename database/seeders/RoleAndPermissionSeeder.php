<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        //create permissions
        $arrayOfPermissionNames = [
            'list-usuarios','view-usuario', 'create-usuario', 'edit-usuario', 'destroy-usuario',
            'list-viaturas','view-viatura', 'create-viatura', 'edit-viatura', 'destroy-viatura',
            'list-manutencoes','view-manutencao', 'create-manutencao', 'destroy-manutencao', 'edit-manutencao', 'aprova-manutencao',
            'list-reparacoes','view-reparacao', 'create-reparacao', 'destroy-reparacao', 'edit-reparacao', 'aprova-reparacao',
            'list-saidas','view-saida', 'create-saida', 'destroy-saida', 'edit-saida',
            'view-relatorio',
            'solicita-manutencao', 'solicita-reparacao',
        ];

        $permissions = collect($arrayOfPermissionNames)->map(function ($permission) {
            return ['name' => $permission, 'guard_name' => 'web'];
        });
        Permission::insert($permissions->toArray());

        $adminRole = Role::create(['name' => 'administrador']);
        $adminRole->givePermissionTo(Permission::all());

        $managerRole = Role::create(['name' => 'gerente']);
        $managerRole->givePermissionTo([
            'list-usuarios','list-viaturas','view-viatura','aprova-manutencao','aprova-reparacao','list-saidas','view-relatorio',
        ]);

        $employeeRole = Role::create(['name' => 'funcionarios']);
        $employeeRole->givePermissionTo([
            'view-viatura','edit-viatura','solicita-manutencao', 'solicita-reparacao'
        ]);

        $driversRole = Role::create(['name' => 'motoristas']);
        $driversRole->givePermissionTo([
            'view-viatura','view-usuario'
        ]);

        $supliesRole = Role::create(['name' => 'fornecedores']);
        $supliesRole->givePermissionTo([
            'list-manutencoes','view-manutencao', 'edit-manutencao',
            'list-reparacoes','view-reparacao', 'edit-reparacao',
        ]);

    }
}
