<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    public function scopeWithCode($query, $code)
    {
        return $query->where('code', $code);
    }

    public function getBalance()
    {
        return $this->balance;
    }
}
