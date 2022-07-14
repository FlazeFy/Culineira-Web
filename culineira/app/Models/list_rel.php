<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_rel extends Model
{
    use HasFactory;

    protected $table = 'list-rel';
    protected $primaryKey = 'id';
    protected $fillable = ['list_id', 'recipe_id', 'created_at', 'updated_at'];
}
