<?php

namespace App\Repositories;

use App\Http\Dtos\Article\GetListDto;
use App\Http\Dtos\Article\FindByIdDto;
use App\Http\Dtos\Article\CreateDto;
use App\Http\Dtos\Article\UpdateDto;
use App\Entities\Article\ArticleList;
use App\Entities\Article\Article;

interface ArticleRepositoryInterface
{
    public function getArticleList(GetListDto $getListDto): ArticleList;
    public function getArticle(FindByIdDto $findByIdDto): Article;
    public function createArticle(CreateDto $createDto);
    public function updateArticle(UpdateDto $updateDto);
    public function deleteArticle(FindByIdDto $findByIdDto);
}
