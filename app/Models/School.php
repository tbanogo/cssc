<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Storage;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'initials', 'address', 'email', 'phone', 'code', 'logo_path'
    ];

    public function getLogoUrlAttribute()
    {
        return $this->logo_path ? Storage::url($this->logo_path) : asset(config('app.logo'));
    }

    public function academyYear(): HasOne
    {
        return $this->hasOne(AcademyYear::class, 'id', 'academy_year_id');
    }

    public function trimester(): HasOne
    {
        return $this->hasOne(Trimester::class, 'id', 'trimester_id');
    }

    public function classGroups(): HasMany
    {
        return $this->hasMany(ClassGroup::class);
    }

    public function trimesters(): HasMany
    {
        return $this->hasMany(Trimester::class);
    }

    public function academyYears(): HasMany
    {
        return $this->hasMany(AcademyYear::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function myClasses(): HasManyThrough
    {
        return $this->hasManyThrough(MyClass::class, ClassGroup::class);
    }
}
