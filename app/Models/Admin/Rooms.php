<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = 'rooms';

    public function motel(){
        return $this->belongsTo('App\Motels','motelID','id');
    }

    public function typeRoom(){
        return $this->belongsTo('App\TypeRooms','typeID','id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User','userID','id');
    }
}
