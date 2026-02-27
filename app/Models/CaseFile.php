<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CaseFile extends Model
{
    // Clean status constants (helps later in frontend/backend)
    public const STATUS_OPEN = 'open';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_CLOSED = 'closed';

    protected $fillable = [
        'case_title',
        'case_type',
        'client_id',
        'lawyer_id',
        'status',
        'description',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function lawyer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'lawyer_id');
    }

    public function hearings(): HasMany
    {
        return $this->hasMany(Hearing::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }
}