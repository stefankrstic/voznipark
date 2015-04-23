<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model {

	protected $fillable = ['type_id', 'color', 'registration_number', 'production_year'];

	public function type ()
	{
		return $this->belongsTo('App\Type');
	}
}
