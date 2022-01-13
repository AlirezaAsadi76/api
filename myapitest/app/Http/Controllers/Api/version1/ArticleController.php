<?php

namespace App\Http\Controllers\Api\version1;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Resources\article as ResourcesArticle;
use App\Http\Resources\articleCollection;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $art=Article::all();
        return new articleCollection($art);
    }
    public function show(Article $article)
    {
       // dd($article);
       // return response()->json($article);
        return new ResourcesArticle($article);
    }
}
