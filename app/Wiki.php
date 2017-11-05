<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wiki extends Model
{
	protected $fillable = ['title','content','tag','url','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
