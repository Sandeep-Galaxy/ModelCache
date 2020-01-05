<?php

use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Database\Eloquent\Model::unguard();
        \App\Company::truncate();
        \App\City::truncate();
 
        for ($i = 0; $i <= 100; $i++) {
 
            $faker = \Faker\Factory::create();
 
            $city = new \App\City();
            $city->name = $faker->city;
            $city->desc = $faker->sentence();
            $city->save();
 
        }
 
        for ($i = 0; $i <= 1000; $i++) {
 
            $faker = \Faker\Factory::create();
 
            $company = new \App\Company();
            $company->name = $faker->company;
            $company->desc = $faker->sentence();
            $company->city()->associate(rand(1,100));
            $company->save();
 
        }
    }
}
