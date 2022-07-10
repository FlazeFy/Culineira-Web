<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socmed extends Model
{
    use HasFactory;

    protected $table = 'socmed';
    protected $primaryKey = 'id';
    protected $fillable = ['users_id', 'socmed_facebook', 'socmed_youtube', 'socmed_tiktok', 'socmed_instagram', 'socmed_linkedin', 'created_at', 'updated_at'];
}
