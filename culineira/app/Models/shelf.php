<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shelf extends Model
{
    use HasFactory;

    protected $table = 'shelf';
    protected $primaryKey = 'id';
    protected $fillable = ['users_id', 'item_name', 'item_description', 'item_qty', 'created_at', 'updated_at'];
}
