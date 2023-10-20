<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = ['pr_id', 'year', 'balance', 'amt_paid'];

    public function pr()
    {
        return $this->belongsTo(PaymentRecord::class, 'pr_id');
    }

}
