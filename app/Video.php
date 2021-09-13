<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "videos";

    //Relacion One to Many
    public function comments()
    {
    	return $this->hasMany('App\Comment')->orderBy('id', 'desc');
    }

    //Relacion Many to One
    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}