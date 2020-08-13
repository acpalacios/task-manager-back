<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'status', 'user_id'
    ];

    /**
     * Get the user associated
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
