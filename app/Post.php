<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'content', 'description', 'status', 'image', 'category_id'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->user_id = auth()->user()->id;
        });
    }

    public function category() {
        return $this->belongsTo('App\Categories');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function tag() {
        return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id')->withPivot('post_id', 'tag_id');
    }
}
