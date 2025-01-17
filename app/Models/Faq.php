<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

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
