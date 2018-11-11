<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'slug', 'parent_id'];
    
    public function posts() {
        return $this->hasMany('App\Post', 'category_id', 'id');
    }

    public function childs() {
    	return $this->hasMany('App\Categories', 'parent_id');
    }
}
