<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

class TestController extends Controller
{
    public function view($id){
        $article = Article::find($id);

        $article->categorie;
        $article->user;
        $article->tags;

        //dd($article);
        return view('test.index',['article'=>$article]);
    }
}
