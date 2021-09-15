<?php

use App\Model\Wallet;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'first_name'=>'Mr.',
            'last_name'=>'Admin',
            'email'=>'admin@email.com',
            'unique_code'=>uniqid().date('').time(),
            'role'=>USER_ROLE_ADMIN,
            'status'=>STATUS_SUCCESS,
            'is_verified'=>1,
            'password'=>\Illuminate\Support\Facades\Hash::make('123456'),
            'created_at' => Carbon::now()
        ]);

        User::insert([
            'first_name'=>'Mr',
            'last_name'=>'User',
            'email'=>'user@email.com',
            'unique_code'=>uniqid().date('').time(),
            'role'=>USER_ROLE_USER,
            'status'=>STATUS_SUCCESS,
            'is_verified'=>1,
            'password'=>\Illuminate\Support\Facades\Hash::make('123456'),
            'created_at' => Carbon::now()
        ]);
        Wallet::insert([
            'user_id'=>2,
            'coin_id'=>1,
            'name'=>'BTC Wallet',
            'unique_code'=>uniqid().date('').time(),
            'status'=>STATUS_SUCCESS,
            'is_primary'=>'1',
        ]);
        Wallet::insert([
            'user_id'=>1,
            'coin_id'=>1,
            'name'=>'BTC Wallet',
            'unique_code'=>uniqid().date('').time(),
            'status'=>STATUS_SUCCESS,
            'is_primary'=>'1',
        ]);
    }
}
