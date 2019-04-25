<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillabel = ['user_id', 'discussion_id', 'content'];


    public function discussion()
    {
        return $this->belongsTo('App\Discussion');
    }


}
