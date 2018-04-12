<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'rating', 'review'];

}
