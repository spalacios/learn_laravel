<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Customer::class,50)->create()->each(
            function ($customer){
                $addresses = factory(\App\CustomerAddress::class, 5)->make();
                $customer->addresses()->saveMany($addresses);
            }
        );
    }
}
