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
        $article = ArticleModel::with('user')
            ->findOrFail($findByIdDto->articleId);

        return new Article($article);
    }

    public function createArticle(CreateDto $createDto)
    {
        $createRef = ArticleModel::create([
            'title' => $createDto->title,
            'body' => $createDto->body,
            'category' => $createDto->category,
            'user_id' => $createDto->authorId
        ]);

        return $createRef;
    }

    public function updateArticle(UpdateDto $updateDto)
    {
        $updateRef = ArticleModel::where('id', $updateDto->id)->update([
            'title' => $updateDto->title,
            'body' => $updateDto->body,
            'category' => $updateDto->category,
            'user_id' => $updateDto->authorId
        ]);

        return $updateRef;
    }

    public function deleteArticle(FindByIdDto $findByIdDto)
    {
        $deleteRef = ArticleModel::where('id', $findByIdDto->id)->delete();

        return $deleteRef;
    }
}
