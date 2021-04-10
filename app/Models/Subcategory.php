<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table ="subcategories";
    protected $fillable =['subcategoryname','category_id'];
    public function categories()
    {
    	return $this->belongsToMany(Category::class);
    }
   
}
