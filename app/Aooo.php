<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aooo extends Model
{
    protected $fillable = [
        'name', 'email'
    ];

    public function phone(){

       return $this->hasOne('App\Phone');
    }

        public function poot()
        {
            return $this->hasMany('App\Poot');
        }
}
