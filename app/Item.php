<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'store';
    public $timestamps = false;

    public function getUrlPicture(){
        return url($this->picture);
    }
}
