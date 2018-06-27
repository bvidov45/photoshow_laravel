<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected $fillable = ['name', 'cover_image', 'description'];
    
    public function photos(){
        return $this->hasMany('App\Photo');
    }
}
