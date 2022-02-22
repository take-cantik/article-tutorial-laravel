<?php

namespace App\Repositories\Eloquent;

use App\Repositories\ArticleRepositoryInterface;
use App\Models\Article AS ArticleModel;
use App\Http\Dtos\Article\GetListDto;
use App\Http\Dtos\Article\FindByIdDto;
use App\Http\Dtos\Article\CreateDto;
use App\Http\Dtos\Article\UpdateDto;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function getArticleList(GetListDto $getListDto)
    {
        //
    }

    public function getArticle(FindByIdDto $findByIdDto)
    {
        //
    }

    public function createArticle(CreateDto $createDto)
    {
        //
    }

    public function updateArticle(UpdateDto $updateDto)
    {
        //
    }

    public function deleteArticle(FindByIdDto $findByIdDto)
    {
        //
    }
}
