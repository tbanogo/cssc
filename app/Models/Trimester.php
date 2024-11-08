<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trimester extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'academy_year_id', 'school_id'
    ];

    public function academyYear(): BelongsTo
    {
        return $this->belongsTo(AcademyYear::class);
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
}
