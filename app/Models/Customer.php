<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function referral()
    {
        return $this->hasOne(ReferralCode::class);
    }

    public function discounts()
    {
        return $this->hasMany(DiscountCode::class);
    }
}