<?php

namespace App\Http\Controllers;
use App\Article;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
       $userArticle = Article::where('user_id',$id)->where('is_published','1')->get();
        return view('user.index',[
            'userArticle' => $userArticle,
        ]);
    }
}
