<?php

namespace App\Http\Dtos\Article;

use App\Http\Dtos\BaseDto;

class UpdateDto extends BaseDto
{
    public int $articleId;
    public string $title;
    public string $body;
    public int $category;
    public int $userId;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
