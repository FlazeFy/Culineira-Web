<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    use HasFactory;

    protected $table = 'classroom';
    protected $primaryKey = 'id';
    protected $fillable = ['users_id', 'classroom_name', 'classroom_description', 'classroom_type', 'classroom_token', 'classroom_image', 'created_at', 'updated_at'];
}
