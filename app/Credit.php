<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Credit extends Model
{
    protected $table = 'credits';

    public function users(){
        return $this->hasOne('App\User');
    }
}
