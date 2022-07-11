<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class community extends Model
{
    use HasFactory;

    protected $table = 'community';
    protected $primaryKey = 'id';
    protected $fillable = ['users_id', 'community_name', 'community_description', 'community_type', 'community_image', 'created_at', 'updated_at'];
}
