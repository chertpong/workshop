<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
    public function user(){
        return $this->belongsTo('App\User');
    }
}
