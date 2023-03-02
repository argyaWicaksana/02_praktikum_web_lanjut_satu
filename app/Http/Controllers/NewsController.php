<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return redirect()->to('https://www.educastudio.com/news');
    }

    public function show($slug)
    {
        return redirect()->to("https://www.educastudio.com/news/$slug");
    }
}
