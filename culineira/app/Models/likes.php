<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class likes extends Model
{
    use HasFactory;

    protected $table = 'likes';
    protected $primaryKey = 'id';
    protected $fillable = ['recipe_id', 'users_id', 'created_at', 'updated_at'];
}
