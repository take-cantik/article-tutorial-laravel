<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class UpdateController extends Controller
{
    public function __invoke(Request $request, integer $id): RedirectResponse
    {
        // return redirect(route());
    }
}
