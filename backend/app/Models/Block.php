<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $fillable = [
        "blocker_id",
        "blocked_id"
    ];

    public function blocked(): BelongsTo
    {
        return $this->belongsTo(User::class, "blocked_id");
    }
    public function blocker(): BelongsTo
    {
        return $this->belongsTo(User::class, "blocker_id");
    }
}
