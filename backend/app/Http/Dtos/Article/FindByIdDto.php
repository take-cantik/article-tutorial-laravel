<?php

namespace App\Http\Dtos\Article;

use App\Http\Dtos\BaseDto;

class FindByIdDto extends BaseDto
{
    public int $articleId;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
