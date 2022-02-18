<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use App\Models\Assignment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

// use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public $userdata = [];

    public function run()
    {
         $faker = Faker::create();
        for ($i=0; $i < 10000; $i++) {
            $userData[] = [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'user' => $faker->boolean,
            ];
        }

        $chunks = array_chunk($userData, 1000);

        foreach ($chunks as $chunk) {
            ModelsUser::insert($chunk);
        }
    }







    // public function run()
    // {
    //     $faker = Faker::create();
    //     foreach (range(1, 50000) as $value) {
    //         DB::table('users')->insert([
    //             'name' => $faker->name,
    //             'email' => $faker->email,
    //             'password' => bcrypt('password'),
    //             'user' => $faker->boolean,

    //         ]);
    //     }
    // }
}
