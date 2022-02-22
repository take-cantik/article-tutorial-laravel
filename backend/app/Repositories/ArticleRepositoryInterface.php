<?php

namespace App\Repositories;

use App\Http\Dtos\Article\GetListDto;
use App\Http\Dtos\Article\FindByIdDto;
use App\Http\Dtos\Article\CreateDto;
use App\Http\Dtos\Article\UpdateDto;

interface ArticleRepositoryInterface
{
    public function getArticleList(GetListDto $getListDto);
    public function getArticle(FindByIdDto $findByIdDto);
    public function createArticle(CreateDto $createDto);
    public function updateArticle(UpdateDto $updateDto);
    public function deleteArticle(FindByIdDto $findByIdDto);
}
