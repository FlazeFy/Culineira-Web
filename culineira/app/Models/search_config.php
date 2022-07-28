<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class search_config extends Model
{
    use HasFactory;

    protected $table = 'search_config';
    protected $primaryKey = 'id';
    protected $fillable = ['config_value', 'config_type', 'created_at', 'updated_at'];
}
