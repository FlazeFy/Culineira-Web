<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//This model for "list" table. The name "list" is CONFLICT with php file.
class list_recipe extends Model
{
    use HasFactory;

    protected $table = 'list';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'list_name', 'list_status', 'list_description', 'created_at', 'updated_at'];
}
