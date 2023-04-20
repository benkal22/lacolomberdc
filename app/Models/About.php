<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';
    
    protected $attributes = [
        // 'main_goal' => 'Nous améliorons la condition des vies de la population congolaise.',
        // 'spec_goal' => "",	
        // 'mission' => 'Nous améliorons la condition des vies de la population congolaise.',	
        // 'vision',
        // 'values',
    ]; 
    protected $fillable = [
        'main_goal',
        'spec_goal',
        'mission',	
        'vision',
        'values',
    ];
}
