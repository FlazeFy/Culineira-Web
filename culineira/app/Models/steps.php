<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class steps extends Model
{
    use HasFactory;

    protected $table = 'steps';
    protected $primaryKey = 'id';
    protected $fillable = ['recipe_id', 'steps_body', 'steps_type', 'steps_image', 'created_at', 'updated_at'];
}
