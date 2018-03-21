<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Assignable attributes
     *
     * @var array
     */
    protected $fillable = ['title', 'description'];

    /**
     * Automatically set timestamps on creation
     */
    public $timestamps = true;

    /**
     * Get user that owns the task
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
