<?php

namespace App\Http\Controllers\v1\Article;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Http\Requests\Article\GetListRequest;
use App\Http\Dtos\Article\GetListDto;

class IndexController extends Controller
{
    public function __invoke(GetListRequest $request): View
    {
        $getListDto = new GetListDto({
            'page' => $request->page,
            'limit' => 12
        });
        // return view();
    }
}
