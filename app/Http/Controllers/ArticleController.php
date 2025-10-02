<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }


    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body'  => 'required|string|min:10',
        ]);

        Article::create($request->only(['title','body']));

        return redirect()->route('articles.index')
            ->with('success', 'Bài viết đã được tạo thành công!');
    }

    public function show($id)
    {
        // demo: hiển thị text, hoặc bạn có thể trả view
        return "Xem chi tiết bài viết ID: " . (int)$id;
    }

    public function edit($id)
    {
        $article = ['id' => $id, 'title' => 'Tiêu đề mẫu', 'body' => 'Nội dung mẫu'];
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body'  => 'required|string|min:10',
        ]);

        $article->update($request->only(['title','body']));

        return redirect()->route('articles.index')
            ->with('success', "Cập nhật bài viết #{$article->id} thành công!");
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')
            ->with('success', "Đã xoá bài viết #{$article->id}");
    }

}
