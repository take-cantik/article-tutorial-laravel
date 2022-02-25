<?php

namespace App\Http\Controllers\v1\Article;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Http\Dtos\Article\FindByIdDto;
use App\Usecases\Article\ShowUsecase;
use App\Http\Presenters\Article\ShowPresenter;

class ShowController extends Controller
{
    public function __invoke(int $articleId, ShowUsecase $usecase, ShowPresenter $presenter): View
    {
        $findByIdDto = new FindByIdDto([
            'articleId' => $articleId
        ]);

        $article = $usecase->execute($findByIdDto);

        return view('articles.show')->with(['article' => $presenter->output($article)]);
    }
}
