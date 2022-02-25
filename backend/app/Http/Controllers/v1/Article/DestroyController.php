<?php

namespace App\Http\Controllers\v1\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Usecases\Article\DestroyUsecase;
use App\Http\Dtos\Article\FindByIdDto;

class DestroyController extends Controller
{
    public function __invoke(int $id, DestroyUsecase $usecase): RedirectResponse
    {
        $findByIdDto = new FindByIdDto([
            'id' => $id
        ]);
        $deleteRef = $usecase->execute($findByIdDto);

        return redirect(route('articles.index'));
    }
}