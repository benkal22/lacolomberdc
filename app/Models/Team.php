<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';
    
    protected $attributes = [
        'link_twitter' => '#',
        'link_facebook' => '#',
        'link_instagram' => '#',	
        'link_linkedin' => '#',
    ]; 
    protected $fillable = [
        'names',
        'post', 
        'picture', 
        'task',	
        'link_twitter',
        'link_facebook',
        'link_instagram',	
        'link_linkedin',
    ];
}
