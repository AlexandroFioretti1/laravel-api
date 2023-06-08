<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            'Html',
            'Css',
            'Bootstrap',
            'JavaScript',
            'VueJs',
            'scss',
            'MySql',
            'Laravel',
        ];

        foreach ($technologies as $technology) {
            $newtechnology = new Technology();
            $newtechnology->name = $technology;
            $newtechnology->save();
        }
    }
}
