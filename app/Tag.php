<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['name', 'slug'];

    public function post() {
    	return $this->belongsToMany('App\Post', 'post_tag', 'post_id', 'tag_id')->withPivot('post_id', 'tag_id')
    	->withTimestamps();
    }
}
