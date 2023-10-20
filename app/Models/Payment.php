<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['title', 'amount', 'my_class_id', 'description', 'year', 'ref_no'];

    public function my_class()
    {
        return $this->belongsTo(MyClass::class);
    }
}
