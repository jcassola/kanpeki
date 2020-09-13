<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;

    public function getUrlPicture(){
        return url('storage/'.$this->picture);
        //Para cargar la foto en la vista seria asi:
        //<img src="{{ $event->getUrlPicture() }}" alt="">
    }
}
