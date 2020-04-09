<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manageShop = new Permission();
        $manageShop->name = 'Manage Shop';
        $manageShop->slug = 'manage-shop';
        $manageShop->save();

        $manageShops = new Permission();
        $manageShops->name = 'Manage shops';
        $manageShops->slug = 'manage-shops';
        $manageShops->save();

        $editSettings = new Permission();
        $editSettings->name = 'Edit Settings';
        $editSettings->slug = 'edit-settings';
        $editSettings->save();

        $addItems = new Permission();
        $addItems->name = 'Add Items';
        $addItems->slug = 'add-items';
        $addItems->save();

        $manageFinance = new Permission();
        $manageFinance->name = 'Manage Finance';
        $manageFinance->slug = 'manage-finance';
        $manageFinance->save();

        $managePromotions = new Permission();
        $managePromotions->name = 'Manage Promotions';
        $managePromotions->slug = 'manage-promotions';
        $managePromotions->save();
    }
}
