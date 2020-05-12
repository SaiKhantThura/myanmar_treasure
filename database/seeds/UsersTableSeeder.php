<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@myanmartreasure.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('admin123') ;
        $user->save();
        $user->assignRole('admin');
    }
}
