<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class UsersMainApp extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = "userMainApp";
    public $timestamps = false;
    protected $table = "users_main_app";

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'fullname',
        'email',
        "birthday",
        "gender",
        "zip_code",
        "address",
        "address",
        "country",
        "phone",
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

}
