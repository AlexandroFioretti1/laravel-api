<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = config("db");

        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->name = $project[0];
            $newProject->start_date = $project[3];
            $newProject->screenshot = $project[1];
            $newProject->type_id = $project[2];
            $newProject->save();
        }
    }
}
