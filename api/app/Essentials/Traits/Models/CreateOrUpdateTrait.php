<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 07/02/2018
 * Time: 6:28 AM
 */

namespace App\Essentials\Traits\Models;

use Illuminate\Support\Facades\Auth;

trait CreateOrUpdateTrait
{
    public static function boot()
    {
        static::creating(function ($model) {
            if (Auth::check()) {
                $model->created_by = Auth::user()->id;
                if (!$model->creatorOnly) {
                    $model->updated_by = Auth::user()->id;
                }
            }
        });

        static::updating(function ($model) {
            if (Auth::check()) {
                if (!$model->creatorOnly) {
                    $model->updated_by = Auth::user()->id;
                }
            }
        });

        static::deleting(function ($model) {
            if (Auth::check()) {
                if (!$model->creatorOnly) {
                    $model->updated_by = Auth::user()->id;
                }
            }
        });

        if (function_exists('restoring')) {
            static::restoring(function ($model) {
                if (Auth::check()) {
                    if (!$model->creatorOnly) {
                        $model->updated_by = Auth::user()->id;
                    }
                }
            });
        }
    }

    public function creator()
    {
        return $this->belongsTo($this->userClass, 'created_by', 'id')->withTrashed();
    }

    public function updater()
    {
        return $this->belongsTo($this->userClass, 'updated_by', 'id')->withTrashed();
    }
}
