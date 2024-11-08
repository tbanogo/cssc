<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class MyClass extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'class_group_id'];

    public function classGroup(): BelongsTo
    {
        return $this->belongsTo(ClassGroup::class);
    }
    
    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }
}
