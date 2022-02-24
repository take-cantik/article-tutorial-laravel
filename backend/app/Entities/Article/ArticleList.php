<?php

namespace App\Entities\Article;

class ArticleList
{
    private array $articles;

    public function __construct(array $articles)
    {
        $this->articles = array_map(function ($article) {
          return new Article((object) $article);
        }, $articles);
    }

    public function getArticleList()
    {
        return $this->articles;
    }
}
