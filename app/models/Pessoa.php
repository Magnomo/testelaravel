<?php
class Pessoa extends Eloquent{
  protected $table = "pessoas";
  protected $fillable = ["nome","dataNasc","sexo_id"];
  public $timestamps = false;

  public function sexo(){
    return $this->belongsTo("Sexo");
  }

  public function documentos(){
    return $this->hasMany("Documento");
  }

  public function enderecos(){
    return $this->hasMany("Endereco");
  }
  
  public function vendas(){
    return $this->hasMany("Venda");
  }

  public function contatos(){
    return $this->hasMany("Contato");
  }
}