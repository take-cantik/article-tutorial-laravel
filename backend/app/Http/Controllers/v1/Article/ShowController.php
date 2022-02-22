<?php

namespace App\Http\Controllers\v1\Article;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ShowController extends Controller
{
    public function __invoke(integer $id): View
    {
        return view()->with();
    }
}
