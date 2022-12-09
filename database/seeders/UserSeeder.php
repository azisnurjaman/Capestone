<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        $voluntirRole = new Role();
        $voluntirRole->name = "voluntir";
        $voluntirRole->display_name = "Voluntir";
        $voluntirRole->save();
        
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('hanyaadmin123');
        $admin->save();
        $admin->attachRole($adminRole);
    }
}
