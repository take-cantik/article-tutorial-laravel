<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class DestroyController extends Controller
{
    public function __invoke(integer $id): RedirectResponse
    {
        // return redirect(route());
    }
}