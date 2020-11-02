<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poot extends Model
{
    protected $fillable = [
        'aooo_id', 'caaat_id', 'title', 'decription'
    ];

        public function caaat()
        {
            return $this->belongsTo('App\Caaat');
        }

        public function aooo()
        {
            return $this->belongsTo(Aooo::class);
        }
}
