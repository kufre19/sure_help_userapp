<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HelpOffered extends Model
{
    use HasFactory;

    protected $table = 'help_offered';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'help_title',
        'help_description',
        'help_category',
        'help_item',
        'help_from',
        'help_to',
        'help_item_url',
        'payment_receipt_id',
        'message',
        'post_id',
    ];

    /**
     * Relationship to the UsersMainApp.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mainAppUser(): BelongsTo
    {
        return $this->belongsTo(UsersMainApp::class, 'help_from', 'uuid');
    }

    /**
     * Relationship to the UsersSponsorApp.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sponsorAppUser(): BelongsTo
    {
        return $this->belongsTo(UsersSponsorApp::class, 'help_to', 'uuid');
    }
}