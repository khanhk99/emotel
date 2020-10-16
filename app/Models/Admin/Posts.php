<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    public function user(){
        return $this->belongsTo('App\Models\User','userID','id');
    }

    public function category(){
        return $this->belongsTo('App\Categories','categoryID','id');
    }
}
