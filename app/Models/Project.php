<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    
    protected $attributes = [
        // 'title' => '',
    ]; 
    protected $fillable = [
        'title',
        'picture',
        'content',
    ];

}