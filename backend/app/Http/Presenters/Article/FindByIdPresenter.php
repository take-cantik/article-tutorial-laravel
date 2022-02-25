<?php

declare(strict_types=1);

namespace App\Http\Presenters\Article;

use App\Entities\Article\Article;

class FindByIdPresenter
{
    public function output(Article $article)
    {
        $author = $article->getAuthor();

        return [
            'id' => $article->getId(),
            'title' => $article->getTitle(),
            'body' => $article->getBody(),
            'category' => $article->getCategory(),
            'authorId' => $author->getId(),
            'authorName' => $author->getName()
        ];
    }
}
