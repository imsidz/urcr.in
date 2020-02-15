<?php

use App\Models\User;
use App\Models\Seller;
use App\Models\Agent;
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

        $seller = new Seller;
        $seller->name = 'admin';
        $seller->company = 'smile4miles';
        $seller->email = 'seller@admin.com';
        $seller->email_verified_at = now();
        $seller->verify = true;
        $seller->mobile = 9999999999;
        $seller->password = Hash::make('seller');
        $seller->save();

        $agent = new Agent;
        $agent->name = 'sid';
        $agent->email = 'sid@smile4miles.in';
        $agent->username = 'sid';
        $agent->password = Hash::make('password');
        $agent->save();
    }
}
