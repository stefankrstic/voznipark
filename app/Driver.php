<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model {

	protected $fillable = ['car_id', 'name', 'email', 'licence_number'];
    
    public function car ()
	{
		return $this->belongsTo('App\Car');
	}
}
