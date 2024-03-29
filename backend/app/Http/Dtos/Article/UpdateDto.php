<?php

namespace App\Http\Dtos\Article;

use App\Http\Dtos\BaseDto;

class UpdateDto extends BaseDto
{
    public int $id;
    public string $title;
    public string $body;
    public int $category;
    public int $authorId;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
