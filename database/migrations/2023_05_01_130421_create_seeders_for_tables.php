<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Role;
use App\Models\RoleUser;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $user = User::create([
            'name' => 'SuperAdmin', 
            'email' => 'suadmin@sum.ba',
            'password' => bcrypt('1234')
        ]);

        $user = User::create([
            'name' => 'Admin', 
            'email' => 'admin@sum.ba',
            'password' => bcrypt('1234')
        ]);
        $user = User::create([
            'name' => 'User', 
            'email' => 'user@sum.ba',
            'password' => bcrypt('1234')
        ]);
        $role = Role::create([
            'name' => "SuperAdminRole"
        ]);
        $role = Role::create([
            'name' => "AdminRole"
        ]);
        $role = Role::create([
            'name' => "UserRole"
        ]);
        $roleuser = RoleUser::create([
            'user_id' => 1,
            'role_id' => 1
        ]);
        $roleuser = RoleUser::create([
            'user_id' => 1,
            'role_id' => 2
        ]);
        $roleuser = RoleUser::create([
            'user_id' => 1,
            'role_id' => 3
        ]);
        $roleuser = RoleUser::create([
            'user_id' => 2,
            'role_id' => 2
        ]);
        $roleuser = RoleUser::create([
            'user_id' => 2,
            'role_id' => 3
        ]);
        $roleuser = RoleUser::create([
            'user_id' => 3,
            'role_id' => 3
        ]);
    }
};