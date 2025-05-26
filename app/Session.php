<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use SoftDeletes;

    public $table = 'sessions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'start_time',
        'end_time'
    ];

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }
}