<?php
class Sexo extends Eloquent{
  protected $table = "sexos";
  protected $fillable = ["tipo"];
  public $timestamps = false;

  public function pessoas(){
    return $this->hasMany("Pessoa");
  }
   
}