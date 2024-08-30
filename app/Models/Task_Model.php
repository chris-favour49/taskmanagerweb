<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task_Model extends Model {
    use HasFactory;
    protected $table = 'task_models';
    protected $fillable = [
        'user_id',
        'project_id',
        'taskname',
        'status',
        'priority',
        'due',

    ];
}
