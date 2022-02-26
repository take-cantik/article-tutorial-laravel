<?php

namespace App\Http\Controllers\v1\Article;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Http\Requests\Article\GetListRequest;
use App\Usecases\Article\IndexUsecase;
use App\Http\Dtos\Article\GetListDto;
use App\Http\Presenters\Article\IndexPresenter;

use App\Enums\CategoryState;

class IndexController extends Controller
{
    public function __invoke(GetListRequest $request, IndexUsecase $indexUsecase, IndexPresenter $presenter): View
    {
        $getListDto = new GetListDto([
            'page' => $request->page,
        ]);

        $articles = $indexUsecase->execute($getListDto);

        $category = CategoryState::NEWS;
        dd($category->name);

        return view('articles.index')->with(['articles' => $presenter->output($articles)]);
    }
}
