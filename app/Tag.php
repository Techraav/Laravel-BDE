<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	protected $table = 'tags';
	public $timestamps = false;
	protected $fillable = array('name', 'uses');

	public function pictures()
	{
		return $this->belongsToMany('App\Picture');
	}

}