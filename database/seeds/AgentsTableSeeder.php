<?php

use Illuminate\Database\Seeder;
use App\Models\Agent;

class AgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agent = new Agent;
        $agent->name = 'sid';
        $agent->email = 'sid@smile4miles.in';
        $agent->username = 'sid';
        $agent->password = Hash::make('password');
        $agent->save();
    }
}
