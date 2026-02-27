<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hearing extends Model
{
    protected $fillable = ['case_file_id', 'hearing_date', 'remarks'];

    protected $casts = [
        'hearing_date' => 'date',
    ];

    public function caseFile(): BelongsTo
    {
        return $this->belongsTo(CaseFile::class);
    }
}