<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Owner - Pak Jayusman (Full Access)
        $owner = User::firstOrCreate(
            ['email' => 'owner@minimarket.test'],
            [
                'name' => 'Pak Jayusman (Owner)',
                'password' => Hash::make('password'),
            ]
        );
        $owner->assignRole('owner');

        // Store Manager - Manajer Toko
        $manager = User::firstOrCreate(
            ['email' => 'manager@minimarket.test'],
            [
                'name' => 'Manajer Toko',
                'password' => Hash::make('password'),
            ]
        );
        $manager->assignRole('store_manager');

        // Supervisor
        $supervisor = User::firstOrCreate(
            ['email' => 'supervisor@minimarket.test'],
            [
                'name' => 'Supervisor Toko',
                'password' => Hash::make('password'),
            ]
        );
        $supervisor->assignRole('supervisor');

        // Cashier - Pegawai Kasir
        $cashier = User::firstOrCreate(
            ['email' => 'cashier@minimarket.test'],
            [
                'name' => 'Pegawai Kasir',
                'password' => Hash::make('password'),
            ]
        );
        $cashier->assignRole('cashier');

        // Warehouse Staff - Pegawai Gudang
        $warehouse = User::firstOrCreate(
            ['email' => 'warehouse@minimarket.test'],
            [
                'name' => 'Pegawai Gudang',
                'password' => Hash::make('password'),
            ]
        );
        $warehouse->assignRole('warehouse_staff');
    }
}
