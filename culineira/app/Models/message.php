<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;

    protected $table = 'message';
    protected $primaryKey = 'id';
    protected $fillable = ['users_id', 'groups_id', 'message_body', 'message_type', 'created_at', 'updated_at'];
}
