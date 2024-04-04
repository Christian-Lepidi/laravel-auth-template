<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Project $project)
    {
        $project = new Project;
        $project->title = 'vite-boolflix';
        $project->description = 'progetto eseguito con Vue + Vite che simula la webapp di Netflix.';
        $project->date_of_publication = '2024-02-16';
        $project->save();

        $project = new Project;
        $project->title = 'php-badwords';
        $project->description = 'primo progetto in cui si è usato il php.';
        $project->date_of_publication = '2024-02-23';
        $project->save();
    }
}
