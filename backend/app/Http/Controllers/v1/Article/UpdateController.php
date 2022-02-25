<?php

namespace App\Http\Controllers\v1\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Article\UpdateRequest;
use App\Usecases\Article\UpdateUsecase;
use App\Http\Dtos\Article\UpdateDto;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, int $id, UpdateUsecase $usecase): RedirectResponse
    {
        $updateDto = new UpdateDto([
            'id' => $id,
            'title' => $request->title,
            'body' => $request->body,
            'category' => $request->category,
            'authorId' => $request->authorId
        ]);
        $updateRef = $usecase->execute($updateDto);
        return redirect(route('articles.show', ['articleId' => $id]));
    }
}
