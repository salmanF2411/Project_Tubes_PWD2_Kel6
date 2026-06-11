<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // Define all permissions
        $permissions = [
            // Dashboard Permissions
            'view dashboard',

            // User Management Permissions
            'view users',
            'create user',
            'edit user',
            'delete user',

            // Store Management Permissions
            'view stores',
            'create store',
            'edit store',
            'delete store',

            // Transaction Permissions
            'view transactions',
            'create transaction',
            'edit transaction',
            'delete transaction',
            'print transaction',

            // Inventory/Stock Permissions
            'view inventory',
            'create inventory',
            'edit inventory',
            'delete inventory',
            'print inventory',
            'manage stock',

            // Reports Permissions
            'view reports',
            'create reports',
            'export reports',

            // Settings Permissions
            'view settings',
            'edit settings',
        ];

        // Create all permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Owner/Admin - Full access to everything
        $ownerRole = Role::firstOrCreate(['name' => 'owner']);
        $ownerRole->syncPermissions($permissions);

        // Store Manager - Manage one store
        $managerRole = Role::firstOrCreate(['name' => 'store_manager']);
        $managerRole->syncPermissions([
            'view dashboard',
            'view transactions',
            'create transaction',
            'print transaction',
            'view inventory',
            'edit inventory',
            'print inventory',
            'view reports',
            'export reports',
            'view settings',
        ]);

        // Supervisor - Monitor transactions and inventory
        $supervisorRole = Role::firstOrCreate(['name' => 'supervisor']);
        $supervisorRole->syncPermissions([
            'view dashboard',
            'view transactions',
            'view inventory',
            'view reports',
            'print inventory',
            'print transaction',
        ]);

        // Cashier - Manage transactions only
        $cashierRole = Role::firstOrCreate(['name' => 'cashier']);
        $cashierRole->syncPermissions([
            'view dashboard',
            'view transactions',
            'create transaction',
        ]);

        // Warehouse Staff - Manage inventory/stock
        $warehouseRole = Role::firstOrCreate(['name' => 'warehouse_staff']);
        $warehouseRole->syncPermissions([
            'view dashboard',
            'view inventory',
            'manage stock',
        ]);
    }
}
