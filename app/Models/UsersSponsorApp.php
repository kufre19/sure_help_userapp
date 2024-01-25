<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UsersSponsorApp extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = "userSponsor";
    public $timestamps = false;
    protected $table = "users_sponsors_app";

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
        "help_offering",
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

    /**
     * Relationship with HelpOffered for help provided.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function helpProvided(): HasMany
    {
        return $this->hasMany(HelpOffered::class, 'help_from', 'uuid');
    }
}
