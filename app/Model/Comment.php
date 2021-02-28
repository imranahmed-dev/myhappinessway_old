<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Comment extends Model
{
   public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
