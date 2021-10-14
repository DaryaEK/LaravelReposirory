<?php

namespace Database\Seeders;

use App\Models\Permission;
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
        $manageUser = new Permission();
        $manageUser->name = 'Administrator';
        $manageUser->slug = 'administrator';
        $manageUser->save();
        $createTasks = new Permission();
        $createTasks->name = 'Create posts';
        $createTasks->slug = 'create-posts';
        $createTasks->save();
    }
}
