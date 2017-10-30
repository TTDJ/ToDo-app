<?php

namespace App;

class Task extends Model
{
    public function scopeIncomplete($query)
    {
        return $query->where('completed', 0);
    }

    public function steps()
    {
        return $this->hasMany(Step::class);
    }

    public function addStep($body)
    {
        // Step::create([
        //     'body' => $body,
        //     'task_id' => $this->id,
        // ]);

        // $this->steps->create(['body'->$body]);

        $this->steps()->create(compact('body'));
    }
}
