<?php

namespace Database\Seeders;

use App\Models\Assignment as ModelsAssignment;
use App\Models\User as ModelsUser;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $assignmentdata = [];

    public function run()
    {
         $faker = Faker::create();
        for ($i=0; $i < 10000; $i++) {
            $assignmentdata[] = [
                'assignment' => Str::random(10),
                'student_id' => $faker->randomDigitNotZero(1),
            ];
        }

        $chunks = array_chunk($assignmentdata, 1000);

        foreach ($chunks as $chunk) {
            ModelsAssignment::insert($chunk);
        }
    }
}  
