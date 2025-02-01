<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    // Menampilkan daftar artikel

    public function index()
    {
        // Ambil 2 artikel terbaru berdasarkan kolom 'created_at'
        $articles = Article::latest()->take(3)->get();
        return view('welcome', compact('articles'));
    }
    public function show($slug)
    {
        // Cari artikel berdasarkan slug
        $article = Article::where('slug', $slug)->firstOrFail();

        // Tampilkan view untuk artikel
        return view('pp', compact('article'));
    }


    // Menampilkan form untuk membuat artikel baru
    public function create()
    {
        return view('articles.create');
    }

    // Menyimpan artikel baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
        ]);

        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }
}
