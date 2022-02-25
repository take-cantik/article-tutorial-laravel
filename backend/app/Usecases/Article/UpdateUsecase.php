<?php

namespace App\Usecases\Article;

use App\Repositories\ArticleRepositoryInterface;
use App\Http\Dtos\Article\UpdateDto;

class UpdateUsecase
{
    private ArticleRepositoryInterface $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function execute(UpdateDto $updateDto)
    {
        return $this->articleRepository->updateArticle($updateDto);
    }
}
