<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['name', 'class_type_id', 'mark_from', 'mark_to', 'remark'];
}
