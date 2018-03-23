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
     *
     * @var boolean
     */
    public $timestamps = true;

    /**
     * Get user that owns the task
     *
     * @return User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
