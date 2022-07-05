<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReferralCode extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted()
    {
        static::creating(function ($referral) {
            $referral->code = Str::random(6);
        });
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
