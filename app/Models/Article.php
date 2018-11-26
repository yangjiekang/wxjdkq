<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Article extends Model
{
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

    public function getImageUrlAttribute()
    {

        if ($this->attributes['thumbnail']){
            return Storage::disk('public')->url($this->attributes['thumbnail']);
        }
        //没有图片就随机返回一张
        $files = Storage::disk('public')->allFiles('images');
        $path = $files[array_rand($files)];
        return Storage::disk('public')->url($path);
    }

    public function link($params = [])
    {
        return route('articles.show', array_merge([$this->product->slug, $this->id, $this->slug], $params));
    }
}
