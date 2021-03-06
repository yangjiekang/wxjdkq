<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::latest()->paginate();
        return view('articles.index', compact('articles'));
    }

    public function category(Request $request, Product $product)
    {
        $articles = Article::where('product_id', $product->id)->latest()->paginate();
        return view('articles.index', compact('articles', 'product'));
    }

    public function show(Request $request, Product $product, Article $article)
    {
        // URL 矫正
        if (! empty($article->slug) && $article->slug != $request->slug){
            return redirect($article->link(), 301);
        }
        return view('articles.show', compact('article'));
    }
}
