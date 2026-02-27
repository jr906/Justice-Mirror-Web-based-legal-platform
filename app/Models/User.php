<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Mass assignable fields
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * Hidden fields
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casting
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    // User belongs to a role (admin / lawyer / client)
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    // Lawyer -> many assigned case files
    public function assignedCases(): HasMany
    {
        return $this->hasMany(CaseFile::class, 'lawyer_id');
    }

    // Lawyer -> appointments
    public function appointmentsAsLawyer(): HasMany
    {
        return $this->hasMany(Appointment::class, 'lawyer_id');
    }

    // User -> uploaded documents
    public function uploadedDocuments(): HasMany
    {
        return $this->hasMany(Document::class, 'uploaded_by');
    }
}