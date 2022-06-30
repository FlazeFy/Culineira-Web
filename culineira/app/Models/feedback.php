<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';
    protected $primaryKey = 'id';
    protected $fillable = ['feedback_body', 'created_at', 'updated_at'];
}
