<?php

namespace Database\Seeders;

use App\Models\Mark as ModelsMark;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $markdata = [];

    public function run()
    {
         $faker = Faker::create();
        for ($i=0; $i < 10000; $i++) {
            $markdata[] = [
                'marks' =>  $faker->randomDigitNotZero(1)*10,
                'student_id' => $faker->randomDigitNotZero(1),
            ];
        }

        $chunks = array_chunk($markdata, 1000);

        foreach ($chunks as $chunk) {
            ModelsMark::insert($chunk);
        }
    }
}  
