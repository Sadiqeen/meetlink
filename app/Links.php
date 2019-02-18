<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $table = 'links';

    protected $fillable = [
        'link', 'name', 'room_id',
    ];

    public function Room() {
        return $this->belongsTo('App\Rooms');
    }
}
