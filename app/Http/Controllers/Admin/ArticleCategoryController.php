<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    public function index(){
        $article= ArticleCategory::Parent()->get();
        return view('admin.articles.category', compact( 'article',));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);
        $article = new ArticleCategory();
        $article->name = $request->name;
        $article->status = $request->status;
        $article->save();
        return redirect('admin/articles/categories/')->with('success', 'Article category added successfully');;
    }

    public function edit($id)
    {
        $category = ArticleCategory::where('id', $id)->first();
        $response = [
            'category' => $category,
        ];
        return response()->json($category, 200); 
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);
        $article = ArticleCategory::find($request->category_id);
        $article->name = $request->name;
        $article->status = $request->status;
        $article->save();
        return redirect('admin/articles/categories')->with('success', 'Article category updated successfully');
    }
    public function destory($id){
        $article = ArticleCategory::findOrFail($id);

        $article_count = Article::where('category_id', $id)->count();
        if ($article_count > 0){
            return redirect()->back()->with('fail', 'You can not delete articles category');
        }
        $article->delete();
        return redirect('admin/articles/categories')->with('success', 'Article category deleted successfully');
    }

    // sub category
    public function subIndex(){
        $article = ArticleCategory::with('parents')->Child()->latest()->get();
        $parent_article = ArticleCategory::Parent()->get();
        return view('admin.articles.subcategory', compact('article', 'parent_article'));
    }

    public function subStore(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $subcategory = new ArticleCategory();
        $subcategory->name = $request->name;
        $subcategory->parent_id = $request->parent_id;
        $subcategory->status = $request->status;
        $subcategory->save();
        return redirect('admin/articles/categories/subcategory')->with('success', 'Sub category added successfully');;
    }
    
    public function subEdit($id)
    {
        $subcategory = ArticleCategory::where('id', $id)->first();
        $parent_article = ArticleCategory::Parent()->where('id', '<>' ,$id)->get();
        $response = [
            'parent_article' => $parent_article,
            'category' => $subcategory,
        ];
        return response()->json($subcategory, 200); 
    }

    public function subUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);
        $subcategory = ArticleCategory::where('id', $request->category_id)->first();
        $subcategory->name = $request->name;
        $subcategory->parent_id = $request->parent_id;
        $subcategory->status = $request->status;
        $subcategory->save();
        return redirect('admin/articles/categories/subcategory')->with('success', 'Sub category updated successfully');
    }

    public function subDestory($id){
        $article = ArticleCategory::find($id);
        $article_count = Article::where('sub_category_id', $id)->count();
        if ($article_count > 0){
            // return with message that can't delete the article
            return redirect()->back()->with('failed', 'You can not delete articles sub category');

        }
        $article->delete();
        return redirect('admin.articles.categories/subcategory')->with('success', 'Sub category deleted successfully');
    }
}
