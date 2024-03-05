<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use App\Helpers\FileHelper;

class ArticleController extends Controller
{
    public function index(){
        $article = Article::with(['category', 'subcategory'])->get();
        //dd($article);
        return view('admin.articles.index', compact('article'));
    }

    public function create(){
        $category = ArticleCategory::Parent()->get();
        $sub_category = ArticleCategory::Child()->get();
        return view('admin.articles.create', compact('category','sub_category'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        // dd($request->all());
        $article = new Article();
        $article->category_id = $request->category_id;
        $article->sub_category_id = $request->sub_category;
        $article->title = $request->name;
        $article->description = $request->description;
        $article->status = $request->status;
        $article->image = FileHelper::image_upload('assets/admin/img/article/', 'png', $request->file('image'));

        $article->save();
        return redirect('admin/articles')->with('success', 'Article created successfully');
    }

    public function edit($id){
        $category = ArticleCategory::Parent()->get();
        $sub_category = ArticleCategory::Child()->get();
        $articles = Article::where('id', $id)->first();
        return view('admin.articles.edit', compact('category','articles','sub_category'));
    }
    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $article = Article::where('id', $request->id)->first();
        $article->category_id = $request->category_id;
        $article->sub_category_id = $request->sub_category;
        $article->title = $request->name;
        $article->description = $request->description;
        $article->status = $request->status;
        $article->image = $request->has('image') ? FileHelper::image_update('assets/admin/img/article/', $article->image, 'png', $request->file('image')) : $article->image;
        $article->save();
        return redirect('admin/articles')->with('success', 'Article Updated successfully');
    }

    public function destory($id){
        $article = Article::find($id);
        FileHelper::image_unlink('assets/admin/img/article/', $article->image);
        $article->delete();
        return redirect('admin/articles')->with('success', 'Article deleted successfully');
    }
}
