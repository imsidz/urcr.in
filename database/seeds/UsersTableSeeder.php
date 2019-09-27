<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'sid heart';
        $user->admin = true;
        $user->password = Hash::make('admin');
        $user->email = 'admin@admin.com';
        $user->save();
    }
}