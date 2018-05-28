<?php
class Cidade extends Eloquent{
  protected $table = "cidades";
  protected $fillable = ["nome","estado_id"];
  public $timestamps = false;

  public function enderecos(){
    return $this->hasMany("Endereco");
  }

  public function estado(){
    return $this->belongsTo("Estado");
  }

   public function bairros(){
    return $this->hasMany("Bairro");
  }
   
}