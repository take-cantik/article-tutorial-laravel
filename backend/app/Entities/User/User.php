<?php

namespace App\Entities\User;

class User
{
    private int $id;
    private string $name;
    private string $email;
    private string $password;
    private string $createdAt;
    private string $updatedAt;

    public function __construct(object $user)
    {
        if (isset($user->id)) $this->id = $user->id;
        if (isset($user->name)) $this->name = $user->name;
        if (isset($user->email)) $this->email = $user->email;
        if (isset($user->password)) $this->password = $user->password
        if (isset($user->created_at)) $this->createdAt = $user->created_at;
        if (isset($user->updated_at)) $this->updatedAt = $user->updated_at;
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
