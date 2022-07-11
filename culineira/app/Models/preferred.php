<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preferred extends Model
{
    use HasFactory;

    protected $table = 'preferred';
    protected $primaryKey = 'id';
    protected $fillable = ['users_id', 'recipe_type_preferred', 'created_at', 'updated_at'];
}
