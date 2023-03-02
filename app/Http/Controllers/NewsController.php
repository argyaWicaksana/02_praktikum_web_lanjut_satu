<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }

    public function show($slug)
    {
        $unslug = str_replace('-', ' ', $slug);
        $data = [
            'newsTitle' => $unslug
        ];

        return view('news.content', $data);
    }
}
