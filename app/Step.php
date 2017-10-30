<?php

namespace App;

class Step extends Model
{
    // $step->task
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
