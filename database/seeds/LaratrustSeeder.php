<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;
use App\Permission;
use Illuminate\Support\Str;

class LaratrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {
        $this->command->info('Truncating User, Role and Permission tables');
        $this->truncateLaratrustTables();
        
        $citizen = new Role();
        $citizen->name         = 'citizen';
        $citizen->display_name = 'Community Member'; 
        $citizen->description  = 'Ordinary citizen with no special privileges'; 
        $citizen->save();

        $superadmin = new Role();
        $superadmin->name         = 'superadmin';
        $superadmin->display_name = 'Super Administrator'; 
        $superadmin->description  = 'User with privileges such as deleting users'; 
        $superadmin->save();

        $probation = new Role();
        $probation->name         = 'probation';
        $probation->display_name = 'Probation Officer';
        $probation->description  = 'This is the probation officer'; 
        $probation->save();

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Administrator';
        $admin->description  = 'This is the administrator'; 
        $admin->save();

    }

    /**
     * Truncates all the laratrust tables and the users table
     * @return    void
     */
    public function truncateLaratrustTables()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('permission_role')->truncate();
        DB::table('permission_user')->truncate();
        DB::table('role_user')->truncate();
        \App\User::truncate();
        \App\Role::truncate();
        \App\Permission::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
