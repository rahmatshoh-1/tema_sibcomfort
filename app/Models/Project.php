<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function buildType()
    {
        return $this->belongsTo(BuildType::class);
    }
    protected $appends = [
        'last_updated_at',
    ];
    public function getLastUpdatedAtAttribute() {
        return Carbon::parse($this->updated_at)->diffForHumans();
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
