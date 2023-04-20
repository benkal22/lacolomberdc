<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            'names' => "Gilchrist NEVES",
            'post' => "Poste",
            'picture' => "",
            'task' => "Tache",
            'link_twitter' => "",
            'link_facebook' => "",
            'link_instagram' => "",
            'link_linkedin' => "",
        ]);

        DB::table('teams')->insert([
            'names' => "Papy NSAMBU",
            'post' => "Poste",
            'picture' => "",
            'task' => "Tache",
            'link_twitter' => "",
            'link_facebook' => "",
            'link_instagram' => "",
            'link_linkedin' => "",
        ]);
    }
}