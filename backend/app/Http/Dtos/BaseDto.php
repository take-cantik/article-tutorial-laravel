<?php

namespace App\Http\Dtos;

class BaseDto
{
    public function __construct(array $array)
    {
        foreach ($array as $key => $value) {
            if ($value) {
                $this->$key = $value;
            }
        }
    }
}
