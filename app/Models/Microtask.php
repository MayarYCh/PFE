<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Microtask extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'response', 'task_id', 'worker_id', 'assignment_date', 'duration'];
    
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }

}


