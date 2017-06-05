<?php

namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
	public $fillable = ['name', 'display_name', 'description'];	

	public function users()
	{
		return $this->belongsTo('App\User');
	}

	public function permissions()
	{
		$this->hasMany('App\Permission');
	}
}