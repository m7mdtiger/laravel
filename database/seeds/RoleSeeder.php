<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apiUser = new Role();
        $apiUser->name = 'Api User';
        $apiUser->slug = 'api-user';
        $apiUser->save();

        $shopOwner = new Role();
        $shopOwner->name = 'Shop Owner';
        $shopOwner->slug = 'shop-owner';
        $shopOwner->save();

        $admin = new Role();
        $admin->name = 'Admin';
        $admin->slug = 'admin';
        $admin->save();
    }
}
