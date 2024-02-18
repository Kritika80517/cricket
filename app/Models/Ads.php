<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->hasOne(AdsCategory::class, 'id', 'category_id');
    }

    public function subcategory(){
        return $this->hasOne(AdsCategory::class, 'id', 'sub_category_id');
    }
}
