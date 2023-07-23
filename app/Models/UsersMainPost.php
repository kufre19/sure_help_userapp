<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UsersMainPost extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "users_main_posts";

    public function UserPosts(): BelongsTo
    {
        return $this->BelongsTo(UsersMainApp::class,"uuid");
    }
}
