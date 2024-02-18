<?php

namespace Database\Seeders;

use App\Models\Admin\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for($i=0; $i < 10; $i++){
            $newProject = new Project();
            $newProject->type_id = rand(0, 10);
            $newProject->name = $faker->word();
            $newProject->save();
        }
    }
}
