<?php

namespace App\Http\Controllers\v1\Article;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Usecases\Article\EditUsecase;

class EditController extends Controller
{
    public function __invoke(int $id, EditUsecase $usecase, FindByIdPresenter $presenter): View
    {
        // return view()->with();
    }
}
