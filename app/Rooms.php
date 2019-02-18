<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = 'rooms';

    protected $fillable = [
        'name', 'user',
    ];

    public function Links() {
        return $this->hasMany('App\Links');
    }
}
