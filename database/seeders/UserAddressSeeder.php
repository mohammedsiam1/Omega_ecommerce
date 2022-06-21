<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\City;
use App\Models\User;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $faker = Factory::create();

        $moh   = User::whereUsername('admin')->first();
        $ksa   = Country::with('states')->whereId(194)->first();
        $state = $ksa->states->random()->id;
        $city = City::whereStateId($state)->inRandomOrder()->first()->id;

        $moh->addresses()->create([
            'address_title'         => 'Home',
            'default_address'       => true,
            'first_name'            => 'moh',
            'last_name'             => 'siam',
            'email'                 => $faker->email,
            'mobile'                => $faker->phoneNumber,
            'address'               => $faker->address,
            'address2'              => $faker->secondaryAddress,
            'country_id'            => $ksa->id,
            'state_id'              => $state,
            'city_id'               => $city,
            'zip_code'              => $faker->randomNumber(5),
            'po_box'                => $faker->randomNumber(4),
        ]);


        $moh->addresses()->create([
            'address_title'         => 'Work',
            'default_address'       => false,
            'first_name'            => 'moh',
            'last_name'             => 'siam',
            'email'                 => $faker->email,
            'mobile'                => $faker->phoneNumber,
            'address'               => $faker->address,
            'address2'              => $faker->secondaryAddress,
            'country_id'            => 65,
            'state_id'              => 3223,
            'city_id'               => 31848,
            'zip_code'              => $faker->randomNumber(5),
            'po_box'                => $faker->randomNumber(4),
        ]);

        Schema::enableForeignKeyConstraints();

    }
}
