<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table ="articles";
    protected $fillable=['title','category'];

    public function category()
    {
        return $this->hasOne(ArticleCategory::class, 'id', 'category_id');
    }

    public function subcategory(){
        return $this->hasOne(ArticleCategory::class, 'id', 'sub_category_id');
    }
}
