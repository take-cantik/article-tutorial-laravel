<?php

namespace App\Http\Controllers\v1\Article;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Http\Dtos\Article\FindByIdDto;
use App\Usecases\Article\ShowUsecase;

class ShowController extends Controller
{
    public function __invoke(int $articleId, ShowUsecase $usecase): View
    {
        $findByIdDto = new FindByIdDto([
            'articleId' => $articleId
        ]);

        $article = $usecase->execute($findByIdDto);

        return view('articles.show')->with(['article' => $article]);
    }
}
