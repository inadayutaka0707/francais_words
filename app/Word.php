<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    //
    protected $fillable = [
        'word', 'meaning',
    ];

    public function question()
    {
        return $this->hasMany('App\Word');
    }
}
