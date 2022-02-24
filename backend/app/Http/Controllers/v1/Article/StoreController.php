<?php

namespace App\Http\Controllers\v1\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Article\CreateRequest;
use App\Usecases\Article\StoreUsercase;
use Illuminate\Http\RedirectResponse;
use App\Http\Dtos\Article\CreateDto;

class StoreController extends Controller
{
    public function __invoke(CreateRequest $request, StoreUsercase $usecase): RedirectResponse
    {
        $createDto = new CreateDto([
            'title' => $request->title,
            'body' => $request->body,
            'category' => $request->category,
            'userId' => $request->userId
        ]);

        $result = $usecase->execute($createDto);
        dd($result);

        return redirect(route('articles.index'));
    }
}
