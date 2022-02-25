<?php

namespace App\Http\Controllers\v1\Article;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Http\Dtos\Article\FindByIdDto;
use App\Usecases\Article\EditUsecase;
use App\Http\Presenters\Article\FindByIdPresenter;

class EditController extends Controller
{
    public function __invoke(int $id, EditUsecase $usecase, FindByIdPresenter $presenter): View
    {
        $findByIdDto = new FindByIdDto([
            'articleId' => $id
        ]);

        $article = $usecase->execute($findByIdDto);

        return view('articles.edit')->with(['article' => $presenter->output($article)]);
    }
}
