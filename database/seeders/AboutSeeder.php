<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'main_goal' => "Nous améliorons la condition des vies de la population congolaise.",
            'spec_goal' => "- Former les acteurs de développement à tous les niveaux ;
                            - Développer les activités génératrices de revenus ;
                            - Appuyer les initiatives communautaires de développement à la base ;
                            - Appuyer les activités des soins de santé primaires et celle de la lutte contre le VIH/SIDA ;
                            - Etc.",
            'mission' => "Notre mission est ...",
            'vision' => "Notre vision est ...",
            'values' => "Nos valeurs sont ...",
        ]);
    }
}
