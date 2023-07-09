<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // Article modelini ekleyin

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article-list')->with(compact('articles'));
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'email' => 'required|email',
            'content' => 'required|string',
        ]);

        // Yeni bir makale oluştur
        $article = new Article();
        $article->title = $data['title'];
        $article->email = $data['email'];
        $article->content = $data['content'];
        $article->save();

        // Başarılı mesajı gönder
        return redirect()->back()->with('success', 'Makale başarıyla oluşturuldu.');
    }

}
