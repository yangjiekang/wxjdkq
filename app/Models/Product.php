<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Product extends Model
{

    /**
     * 为路由模型获取键名。
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getImageUrlAttribute()
    {
        if ($this->attributes['thumbnail']){
            return Storage::disk('public')->url($this->attributes['thumbnail']);
        }
        return '';
    }
}
