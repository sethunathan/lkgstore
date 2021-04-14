<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
    app()['cache']->forget('spatie.permission.cache');

    
    Role::create(['name' => 'user']);

   // $user = User::factory()->create();

    $user = User::create([
        'name' => 'Arun Kumar',
        'mobile' => '9894439904',
        'password' => Hash::make('password'),
    ]);

    $user->assignRole('user');
    
    Role::create(['name' => 'admin']);

    /** @var \App\User $user */
    $admin = User::create([
        'name' => 'Admin',
        'mobile' => '8098207481',
        'password' => Hash::make('password'),
    ]);

    $admin->assignRole('admin');
    }
}
