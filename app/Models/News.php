<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    
    protected $attributes = [
        // 'title' => '',
    ]; 
    protected $fillable = [
        'domain',
        'title',
        'picture',
        'content',
    ];
}
