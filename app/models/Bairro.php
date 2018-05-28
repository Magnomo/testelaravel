<?php
class Bairro extends Eloquent{
  protected $table = "bairros";
  protected $fillable = ["nome","cidade_id"];
  public $timestamps = false;

  public function cidade(){
    return $this->belongsTo("Cidade");
  }   
}