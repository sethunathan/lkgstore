<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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

    
    //Role::create(['name' => 'user']);

    //$user = User::factory()->create();

   // $user->assignRole('user');
    
    //Role::create(['name' => 'user']);

    /** @var \App\User $user */
    $user = User::create([
        'name' => 'user',
        'mobile' => '7402058490',
        'password' => Hash::make('password'),
    ]);

    $user->assignRole('user');
    }
}
