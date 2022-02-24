<?php

namespace App\Entities\User;

use App\Entities\Article\Article;

class User
{
    private int $id;
    private string $name;
    private string $email;
    private string $password;
    private Article $article;
    private string $createdAt;
    private string $updatedAt;

    public function __construct(object $object)
    {
        if (isset($object->id)) $this->id = $object->id;
        if (isset($object->name)) $this->name = $object->name;
        if (isset($object->email)) $this->email = $object->email;
        if (isset($object->password)) $this->password = $object->password
        if (isset($object->articles)) $this->
        if (isset($object->created_at)) $this->createdAt = $object->created_at;
        if (isset($object->updated_at)) $this->updatedAt = $object->updated_at;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
