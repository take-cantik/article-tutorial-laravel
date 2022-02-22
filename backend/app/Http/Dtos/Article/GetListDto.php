<?php

namespace App\Http\Dtos\Article;

use App\Http\Dtos\BaseDto;

class GetListDto extends BaseDto
{
    public int $page;
    public int $limit;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
