<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    //use HasFactory;

    protected $table = 'recipes';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'recipe_name', 'recipe_calorie', 'recipe_desc', 'recipe_country', 'recipe_type', 'recipe_time_spend', 'recipe_main_ing', 'recipe_level', 'recipe_visibility', 'recipe_url', 'recipe_video', 'created_at', 'updated_at'];

}
