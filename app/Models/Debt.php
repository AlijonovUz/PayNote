<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Debt extends Model
{
    protected $fillable = [
        'name', 'phone', 'amount', 'paid_amount', 'note'
    ];

    public static function booted()
    {
        static::creating(function (Debt $debt) {
            $debt->user_id ??= auth()->id();
        });

        static::saving(function (Debt $debt) {
            if ($debt->paid_amount > $debt->amount) {
                $debt->paid_amount = $debt->amount;
            }

            if ($debt->paid_amount <= 0) {
                $debt->status = 'unpaid';
            } elseif ($debt->paid_amount < $debt->amount) {
                $debt->status = 'partial';
            } else {
                $debt->status = 'paid';
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
