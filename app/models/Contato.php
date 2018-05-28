<?php
class Contato extends Eloquent{
  protected $table = "contatos";
  protected $fillable = ["telefone","email","pessoa_id"];
  public $timestamps = false;

  public function pessoa(){
    return $this->belongsTo("Pessoa");
  }

 
}