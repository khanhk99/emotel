<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motels extends Model
{
    protected $table = 'motels';

    public function rooms(){
        return $this->hasMany('App\Rooms', 'motelID', 'id');
    }
}
