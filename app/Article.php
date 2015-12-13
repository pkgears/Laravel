<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = "articles";
    protected $fillable=['title','content','categorie_id','user_id'];
   
    public function categorie(){
    	return $this->belongsTo('App\Category');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function images(){
    	return $this->hasMany('App\Image');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
