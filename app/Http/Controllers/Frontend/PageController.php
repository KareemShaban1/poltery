<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('frontend.pages.page', compact('pages'));
    }


}
