<?php

namespace App\Model;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category(){
       return $this->belongsTo('App\Model\Category');
    }
    
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    
    public function tags(){
        return $this->belongsToMany('App\Model\Tag');
    }
}
