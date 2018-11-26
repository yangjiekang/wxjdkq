<?php
namespace App\Handlers;

use Overtrue\Pinyin\Pinyin;

class SlugTranslateHandler
{
    public function translate($text)
    {
        //以后考虑翻译英文,这里用拼音够了
        return $this->pinyin($text);

    }


    public function pinyin($text)
    {
        return str_slug(app(Pinyin::class)->permalink($text));
    }
}