<?php

use App\Role;
use App\User;
use App\Permission;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shopOwner = Role::where('slug','shop-owner')->first();
        $admin = Role::where('slug', 'admin')->first();

        $manageShop = Permission::where('slug','manage-shop')->first();
        $manageShops = Permission::where('slug','manage-shops')->first();
        $editSettings = Permission::where('slug','edit-settings')->first();

        $owner = new User();
        $owner->name = 'owner';
        $owner->email = 'owner@shop.com';
        $owner->password = bcrypt('secret');
        $owner->save();
        $owner->roles()->attach($shopOwner);
        $owner->permissions()->attach($manageShop);


        $someAdmin = new User();
        $someAdmin->name = 'admin';
        $someAdmin->email = 'admin@marketapp.com';
        $someAdmin->password = bcrypt('secret');
        $someAdmin->save();
        $someAdmin->roles()->attach($admin);
        $someAdmin->permissions()->attach($editSettings);
        $someAdmin->permissions()->attach($manageShops);

        // Attach permission to a role.
        $shopOwner->permissions()->attach($manageShop);
    }
}
