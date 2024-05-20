<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Http\Controllers\CricketController;



class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data=[];
        $data['category'] = ArticleCategory::where('parent_id', null)->get();
        $category = ArticleCategory::whereNotNull('parent_id');
        if($request->category != null){
            $category->where('parent_id', $request->category);
        }
        $data['subCategory'] = $category->get();
        $data['popArticle'] = Article::latest()->first();
        $data['schedule_matches'] = CricketController::matches_schedules();
        $data['article'] = Article::latest()->take(2)->get();
        $data['smallArticle'] = Article::all();
        // dd($data);
        return view('frontend.article', compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
