<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invitation extends Model
{
    //user_id_1 is the users id as the invitee
    //user_id_2 is the users id as the target invitation

    use HasFactory;

    protected $table = 'invitation';
    protected $primaryKey = 'id';
    protected $fillable = ['users_id', 'groups_id', 'users_id_2', 'created_at', 'updated_at'];
}
