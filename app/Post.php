<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   	public $fillable = ['title', 'description'];

   	public function users()
   	{
   		return $this->belongsTo('App\User');
   	}
}
