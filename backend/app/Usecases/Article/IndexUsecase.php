<?php

namespace App\Usecases\Article;

use App\Repositories\ArticleRepositoryInterface;
use App\Http\Dtos\Article\GetListDto;

class IndexUsecase
{
    private ArticleRepositoryInterface $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function execute(GetListDto $getListDto)
    {
        return $this->articleRepository->getArticleList($getListDto);
    }
}
