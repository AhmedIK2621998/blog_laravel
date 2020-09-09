<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','description','user_id'];

    public function user() {

        // رجع البوست اللي بنتمي الي هذا الكلااس
        return $this->belongsTo(User::class);    // طريقه لربط الجداول مع بعضها 
        // return $this->belongsTo('App/User');
    } 
}
