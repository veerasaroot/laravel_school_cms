<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class StaffRecord extends Model
{
    protected $fillable = ['code', 'emp_date', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
