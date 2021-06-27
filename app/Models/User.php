<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function education() {
        return $this->hasOne(EducationDetails::class);
    }

    public function basic() {
        return $this->hasOne(BasicDetails::class);
    }
    public function ref() {
        return $this->hasOne(ReferanceDetails::class);
    }

    public function technical() {
        return $this->hasOne(TechnicalExperiances::class);
    }

    public function pref() {
        return $this->hasOne(Preference::class);
    }

    public function work() {
        return $this->hasOne(WorkExperiances::class);
    }
}
