<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Todo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'completed',
        'active'
    ];

    /**
     * Belongs To Relation - Eloquent Relation For Todo user
     *
     * @return void
     */
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
//php artisan make:model Todo -m
// make model and migration