<?php

namespace Database\Seeders;

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
        // admin permission
        Permission::create(['name' => 'tambah_user']);

        // user purchase permission
        Permission::create(['name' => 'beli_barang']);

        // user stok permission
        Permission::create(['name' => 'tambah_barang']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user_purchase']);
        Role::create(['name' => 'user_stok']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah_user');

        $roleUserPurchase = Role::findByName('user_purchase');
        $roleUserPurchase->givePermissionTo('beli_barang');

        $roleUserStok = Role::findByName('user_stok');
        $roleUserStok->givePermissionTo('tambah_barang');
    }
}
