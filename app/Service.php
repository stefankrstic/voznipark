<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

	protected $fillable = ['car_id','name', 'address'];

public function car ()
	{
		return $this->belongsTo('App\Car');
	}
}
