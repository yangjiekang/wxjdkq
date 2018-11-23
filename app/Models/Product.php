<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
