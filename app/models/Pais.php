<?php
class Pais extends Eloquent{
  protected $table = "paises";
  protected $fillable = ["nome","sigla"];
  public $timestamps = false;

  public function estados(){
    return $this->hasMany("Estado");
  }
   
}