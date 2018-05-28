<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;

class Usuario extends Eloquent implements UserInterface {

	use UserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usuarios';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	protected $fillable = ['nome', 'email'];
	protected $hidden = array('password', 'remember_token');



}
