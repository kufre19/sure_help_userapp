<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMainPost extends Model
{
    use HasFactory;

    protected $table = "users_main_posts";
    public $timestamps = false;

}
