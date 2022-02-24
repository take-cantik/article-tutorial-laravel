<?php

namespace App\Http\Controllers\v1\Article;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Http\Requests\Article\GetListRequest;
use App\Usecases\Article\IndexUsecase;
use App\Http\Dtos\Article\GetListDto;

class IndexController extends Controller
{
    public function __invoke(GetListRequest $request, IndexUsecase $indexUsecase): View
    {
        $getListDto = new GetListDto([
            'page' => $request->page,
        ]);

        $articles = $indexUsecase->execute($getListDto);

        dd($articles);

        return view();
    }
}
