<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $guarded = [];

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
