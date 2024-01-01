<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use HasFactory;
    protected $fillable = [
        'tx_ref',
        'amount',
        'meta',
        'email',
        'phonenumber',
        'name',
    ];

    /**
     * Generate a unique transaction reference (tx_ref).
     *
     * @return string
     */
    public static function generateUniqueTxRef()
    {
        $txRef = 'surehelp-donation-' . bin2hex(random_bytes(5)); // Example prefix + random bytes

        // Check if the generated tx_ref is already in use
        while (self::where('tx_ref', $txRef)->exists()) {
            $txRef = 'surehelp-donation-' . bin2hex(random_bytes(8));
        }

        return $txRef;
    }
}
