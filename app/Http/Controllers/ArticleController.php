<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(Request $request)
    {
        $article = new Article;
        $article->title = 'test article';
        $article->text = 'test text';

        $article->save();

        $tag = new Tag;
        $tag->name = "Foods";
        $tag->save();
        $article->tags()->attach($tag);

        return 'Success';
    }


    public function get()
    {

        return 'My article';
    }
}
