<?php

namespace App\Repositories;

interface ArticleRepositoryInterface
{
    public function getArticleList($getListDto);
    public function getArticle($findByIdDto);
    public function createArticle($createDto);
    public function updateArticle($updateDto);
    public function deleteArticle($findByIdDto);
}
