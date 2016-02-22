<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function comments(){
		return $this->hasMany(\App\Comment::class);
	}

	/*
    protected $table = 'posts';

    protected $fillable = [
    	'title',
    	'content',
    	'is_feature',
    	'page_view',
    ];
    */
}

