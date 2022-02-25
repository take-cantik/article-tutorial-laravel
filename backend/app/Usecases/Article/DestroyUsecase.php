<?php

namespace App\Usecases\Article;

use App\Repositories\ArticleRepositoryInterface;
use App\Http\Dtos\Article\FindByIdDto;

class DestroyUsecase
{
    private ArticleRepositoryInterface $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function execute(FindByIdDto $findByIdDto)
    {
        return $this->articleRepository->deleteArticle($findByIdDto);
    }
}
