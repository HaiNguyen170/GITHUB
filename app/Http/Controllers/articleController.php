<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class articleController extends Controller
{
    //
    public function index()
    {
        $article = Article::paginate(4);
        return view('index', compact('article'));
    }

    public function show($id){
        $article = Article::find($id);
        return view('show')->with('article',$article);
    }
}
