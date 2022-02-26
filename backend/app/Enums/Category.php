<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Category extends Enum // implements LocalizedEnum
{
    const technology = 0;
    const news = 1;
    const release = 2;
    const other = 9;
}
