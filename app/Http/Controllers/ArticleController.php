<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
date_default_timezone_set('Europe/Paris');
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Article::all()->where('is_published',1);
        return view('articles.allArticle',[
            'posts' => $posts,
            'selectCategorie' => $this->navCategorie(),
            'selectUser' => $this->navUser(),
        ]);
    }

    public function show($id)
    {
        $article = Article::where('id', $id)->where('is_published',1)->first();
        if ($article) {
            $dateFormated = $article->created_at = Carbon::parse($article->created_at)->diffForHumans();
            return view('articles.article', [
                'article' => $article,
                'dateFormated' => $dateFormated,
            ]);
        }
        else{
            return redirect('/');
        }
    }

    public function navCategorie()
    {
        return $selectCategorie = Category::all();
    }
    public function navUser()
    {
        return $selectUser = User::all();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
