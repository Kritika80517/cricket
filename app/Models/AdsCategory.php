<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsCategory extends Model
{
    use HasFactory;
    public function scopeActive($queary){
        return $queary->where('status', 1);
    }

    public function scopeParent($queary){
        return $queary->whereNull('parent_id');
    }

    public function scopeChild($queary){
        return $queary->whereNotNull('parent_id');
    }

    public function parents()
    {
        return $this->hasOne(AdsCategory::class, 'id', 'parent_id');
    }
}
