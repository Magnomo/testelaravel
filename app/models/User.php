<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;


class User extends Eloquent implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait,SoftDeletingTrait;

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
	protected $hidden = array('password', 'remember_token');
	protected $fillable = array('email','password');
	public $timestamps = true;
	
	public function cliente(){
		return $this->hasOne('Cliente', 'usuario_id');
	}
	

}
