<?php

namespace App\Http\Dtos\Article;

use App\Http\Dtos\BaseDto;

class GetListDto extends BaseDto
{
    public int $page = 1;
    public int $limit = 12;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
