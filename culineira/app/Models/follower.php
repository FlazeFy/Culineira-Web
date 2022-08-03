<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class follower extends Model
{
    //user_id_1 is the users id as the follower
    //user_id_2 is the users id as the target following

    use HasFactory;

    protected $table = 'follower';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id_1', 'user_id_2', 'created_at', 'updated_at'];
}
