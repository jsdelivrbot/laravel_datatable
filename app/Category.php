<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Product;
class Category extends Model
{
    //
    use SoftDeletes;

    protected $guarded = [];

    protected $dates = ['deleted_at'];

    public function products()
    {
    	return $this->belongsToMany(\App\Product::class);
    }

    public function childrens()
    {
    	return $this->belongsToMany(\App\Category::class,'category_parent','category_id','parent_id');
    }
}
