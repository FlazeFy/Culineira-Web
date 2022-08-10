<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calendar extends Model
{
    use HasFactory;

    protected $table = 'calendar';
    protected $primaryKey = 'id';
    protected $fillable = ['recipe_id', 'users_id', 'calendar_type', 'created_at', 'updated_at'];
}
