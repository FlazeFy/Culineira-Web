<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredients extends Model
{
    use HasFactory;

    protected $table = 'ingredients';
    protected $primaryKey = 'id';
    protected $fillable = ['recipe_id', 'ingredients_name', 'ingredients_vol', 'ingredients_type', 'created_at', 'updated_at'];
}
