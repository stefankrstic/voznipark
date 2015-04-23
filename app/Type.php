<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {

	protected $fillable = ['manufacturer_id', 'name'];

	public function manufacturer ()
	{
		return $this->belongsTo('App\Manufacturer');
	}

}
