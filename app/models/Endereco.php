<?php
class Endereco extends Eloquent{
  protected $table = "enderecos";
  protected $fillable = ["logradouro","cep","numero", "bairro", "cidade_id", "pessoa_id"];
  public $timestamps = false;

  public function pessoa(){
    return $this->belongsTo("Pessoa");
  }

  public function cidade(){
    return $this->belongsTo("Cidade");
  }
   
}