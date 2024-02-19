<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchHighlight extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->hasOne(MatchHighlightCategory::class, 'id', 'category_id');
    }

    public function subcategory(){
        return $this->hasOne(MatchHighlightCategory::class, 'id', 'sub_category_id');
    }
    
    public function language(){
        return $this->hasOne(Language::class, 'id', 'language_id');
    }
}
