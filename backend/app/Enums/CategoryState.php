<?php

namespace App\Enums;

enum CategoryState
{
    case TECHNOLOGY = 0;
    case NEWS = 1;
    case RELEASE = 2;

    public function getCategory()
    {
        return match($this)
        {
            self::TECHNOLOGY => '技術',
            self::NEWS => 'ニュース',
            self::RELEASE => 'リリーズ'
        }
    };
}
