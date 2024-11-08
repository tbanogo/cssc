<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use SoftDeletes;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'birthday',
        'gender',
        'nationality',
        'state',
        'city',
        'religion',
        'blood_group',
        'phone',
        'address',
        'locked',
        'schoold_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday'          => 'datetime:Y-m-d',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function parents()
    {
        return $this->hasMany(ParentRecord::class);
    }

    public function teachers()
    {
        return $this->hasMany(TeacherRecord::class);
    }

    public function firtName()
    {
        return explode(' ', $this->name)[1];
    }

    public function getFirtNameAttribute()
    {
        return $this->firtName();
    }

    public function lastName()
    {
        return explode(' ', $this->name)[0];
    }

    public function getLastNameAttribute()
    {
        return $this->lastName();
    }

    public function otherNames()
    {
        $names = array_diff_key(explode(' ', $this->name), array_flip([0, 1]));
        
        return implode(' ', $names);
    }

    public function getOtherNamesAttribute()
    {
        return $this->otherNames();
    }

    public function getBirthdayAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
}
