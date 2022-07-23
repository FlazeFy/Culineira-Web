<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    use HasFactory;

    protected $table = 'activity';
    protected $primaryKey = 'id';
    protected $fillable = ['users_id', 'activity_from', 'activity_type', 'activity_description', 'created_at', 'updated_at'];
}
