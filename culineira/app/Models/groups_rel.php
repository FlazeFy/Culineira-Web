<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groups_rel extends Model
{
    use HasFactory;

    protected $table = 'groups-rel';
    protected $primaryKey = 'id';
    protected $fillable = ['users_id', 'groups_id', 'created_at', 'updated_at', 'groups_role'];
}
