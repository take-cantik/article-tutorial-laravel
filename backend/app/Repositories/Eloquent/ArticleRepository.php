<?php

namespace App\Repositories\Eloquent;

use App\Repositories\ArticleRepositoryInterface;
use App\Models\Article AS ArticleModel;
use App\Http\Dtos\Article\GetListDto;
use App\Http\Dtos\Article\FindByIdDto;
use App\Http\Dtos\Article\CreateDto;
use App\Http\Dtos\Article\UpdateDto;
use App\Entities\Article\ArticleList;
use App\Entities\Article\Article;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function getArticleList(GetListDto $getListDto): ArticleList
    {
        $articles = ArticleModel::offset($getListDto->page * $getListDto->limit)
            ->limit($getListDto->limit);

        return new ArticleList((array) $articles);
    }

    public function getArticle(FindByIdDto $findByIdDto): Article
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
