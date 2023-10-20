<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    protected $fillable = ['ttr_id', 'ts_id', 'exam_date', 'day', 'timestamp_from', 'timestamp_to', 'subject_id',];

    public function time_slot()
    {
        return $this->belongsTo(TimeSlot::class, 'ts_id');
    }

    public function tt_record()
    {
        return $this->belongsTo(TimeTableRecord::class, 'ttr_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
