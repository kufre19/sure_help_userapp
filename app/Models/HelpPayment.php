<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HelpPayment extends Model
{
    use HasFactory;

    protected $table = 'help_payments';

    protected $fillable = [
        'help_offered_id',
        'trx_ref',
        'amount',
        'status',
    ];

    public function helpOffered(): BelongsTo
    {
        return $this->belongsTo(HelpOffered::class);
    }

     /**
     * Generate a unique transaction reference.
     *
     * @return string
     */
    public static function generateUniqueTxRef()
    {
        // Generate a unique id based on the current time and a random element
        $uniqueId = uniqid('trx-'); // Example: trx-5f5bcc3b234b7

        // Check if this ID already exists in the database
        $exists = self::where('trx_ref', $uniqueId)->exists();

        // If it exists, recursively call this method. If not, return the unique ID.
        return $exists ? self::generateUniqueTxRef() : $uniqueId;
    }
}