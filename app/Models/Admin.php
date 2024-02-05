<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;

class Admin extends Authenticatable implements LaratrustUser
{
    use HasFactory, Notifiable, HasRolesAndPermissions;

    protected $guarded = [];

    protected $hidden = [
        'password',
    ];

    // protected $appends = [
    //     'allPermissions',
    // ];

    // public function getAllPermissionsAttribute()
    // {
    //     return $this->allPermissions();
    // }

    /**
     * Присвоить пароль пользователю.
     *
     * @param  string  $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['password'] = bcrypt($value);
        }
    }

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->admin_id = auth()->check() ? auth()->user()->id : 1;
        });

        self::updating(function ($model) {
            $model->admin_id = auth()->check() ? auth()->user()->id : 1;
        });
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
