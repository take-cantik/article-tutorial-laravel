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
        $articles = ArticleModel::with('user')
            ->offset(($getListDto->page - 1) * $getListDto->limit)
            ->limit($getListDto->limit)
            ->get();

        return new ArticleList($articles->toArray());
    }

    public function getArticle(FindByIdDto $findByIdDto): Article
    {
        $article = ArticleModel::find($findByIdDto->id);

        return new Article($article);
    }

    public function createArticle(CreateDto $createDto)
    {
        $createRef = ArticleModel::create([
            'title' => $createDto->title,
            'body' => $createDto->body,
            'category' => $createDto->category,
            'user_id' => $createDto->userId
        ]);

        return $createRef;
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
