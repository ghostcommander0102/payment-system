<?php

use App\Model\Coin;
use Illuminate\Database\Seeder;

class CoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coin::create(['name'=>'Bitcoin', 'type'=>'BTC','unique_code'=>uniqid().date('').time()]);
        Coin::create(['name'=>'Tether USD', 'type'=>'USDT', 'unique_code'=>uniqid().date('').time(),]);
        Coin::create(['name'=>'Ether', 'type'=>'ETH', 'unique_code'=>uniqid().date('').time(),]);
        Coin::create(['name'=>'Litecoin', 'type'=>'LTC','unique_code'=>uniqid().date('').time(),]);
        Coin::create(['name'=>'Ether', 'type'=>'DOGE','unique_code'=>uniqid().date('').time(),]);
        Coin::create(['name'=>'Bitcoin Cash', 'type'=>'BCH','unique_code'=>uniqid().date('').time(),]);
        Coin::create(['name'=>'Dash', 'type'=>'DASH','unique_code'=>uniqid().date('').time(),]);
    }
}
