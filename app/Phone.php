<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
        'aooo_id','number'
    ];

    public function aooo()
    {
        return $this->belongsTo('App\Aooo');
    }


    
}
