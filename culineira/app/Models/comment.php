<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    protected $table = 'comment';
    protected $primaryKey = 'id';
    protected $fillable = ['recipe_id', 'steps_id', 'users_id', 'comment_body', 'comment_image', 'created_at', 'updated_at'];
}
