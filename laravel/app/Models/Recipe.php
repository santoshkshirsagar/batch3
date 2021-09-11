<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }
    public function fetured()
    {
        return $this->hasOne(\App\Models\Featured::class);
    }
}
