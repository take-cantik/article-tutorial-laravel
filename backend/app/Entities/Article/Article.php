<?php

namespace App\Entities\Article;

use App\Entities\User\User;

class Article
{
    private int $id;
    private string $title;
    private string $body;
    private int $category;
    private User $author;
    private string $createdAt;
    private string $updateAt;

    private function __construct(object $object)
    {
        if (isset($object->id)) $this->id = $object->id;
        if (isset($object->title)) $this->title = $object->title;
        if (isset($object->body)) $this->body = $object->body;
        if (isset($object->category)) $this->category = $object->category;
        if (isset($object->user)) $this->author = new User((object) $object->user);
        if (isset($object->created_at)) $this->createdAt = $object->created_at;
        if (isset($object->updated_at)) $this->updatedAt = $object->updated_at;
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

    private function getAuthorId()
    {
        return $this->authorId;
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
