<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormsBuilderTracker extends Model
{
    protected $table = 'forms_builder_tracker';
    public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }
}
