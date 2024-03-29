<?php

namespace App\Usecases\Article;

use App\Repositories\ArticleRepositoryInterface;
use App\Http\Dtos\Article\CreateDto;

class StoreUsecase
{
    private ArticleRepositoryInterface $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function execute(CreateDto $createDto)
    {
        return $this->articleRepository->createArticle($createDto);
    }
}
