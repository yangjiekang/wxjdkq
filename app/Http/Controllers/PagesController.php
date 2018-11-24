<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        //服务
        $services = Product::find([1,2,4,6]);

        //近期资讯
        $articles = Article::latest()->take(4)->get();
        return view('pages.root', compact('services', 'articles'));
    }

    public function about()
    {
        $about = Page::find(3);
        return view('pages.about', compact('about'));
    }

    public function opening()
    {
        return view('pages.opening');
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
