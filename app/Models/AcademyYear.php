<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AcademyYear extends Model
{
    use HasFactory;

    protected $appends = ['name'];

    protected $fillable = [
        'start_year',
        'stop_year',
        'school_id'
    ];

    public function name(): Attribute
    {
        return Attribute::make(
            get: fn () => "$this->start_year - $this->stop_year",
        );
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function trimesters(): HasMany
    {
        return $this->hasMany(Trimester::class);
    }
}
