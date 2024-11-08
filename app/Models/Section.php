<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'my_class_id'];

    public function myClass(): BelongsTo
    {
        return $this->belongsTo(MyClass::class);
    }
}
