<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // 网站首页
    public function root()
    {

        return view('pages.root');
    }
}
