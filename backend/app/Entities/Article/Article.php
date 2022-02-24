<?php

namespace App\Entities\Article;

class Article
{
    private int $id;
    private string $title;
    private string $body;
    private int $category;
    private int $userId;
    private string $createdAt;
    private string $updateAt;

    private function __construct(object $article)
    {
        if (isset($article->id)) $this->id = $article->id;
        if (isset($article->title)) $this->title = $article->title;
        if (isset($article->body)) $this->body = $article->body;
        if (isset($article->category)) $this->category = $article->category;
        if (isset($article->user_id)) $this->userId = $article->user_id;
        if (isset($article->created_at)) $this->createdAt = $article->created_at;
        if (isset($article->updated_at)) $this->updatedAt = $article->updated_at;
    }

    private function getId()
    {
        return $this->id;
    }

    private function getTitle()
    {
        return $this->title;
    }

    private function getBody()
    {
        return $this->body;
    }

    private function getCategory()
    {
        return $this->category;
    }

    private function getUserId()
    {
        return $this->userId;
    }

    private function getCreatedAt()
    {
        return $this->createdAt;
    }

    private function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
