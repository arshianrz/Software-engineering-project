<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DiscountCode extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted()
    {
        static::creating(function ($discount) {
            $discount->code = Str::random(8);
        });
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
