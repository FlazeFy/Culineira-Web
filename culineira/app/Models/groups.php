<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groups extends Model
{
    use HasFactory;

    protected $table = 'groups';
    protected $primaryKey = 'id';
    protected $fillable = ['users_id', 'groups_name', 'groups_description', 'groups_type', 'groups_token', 'groups_image', 'created_at', 'updated_at'];
}
