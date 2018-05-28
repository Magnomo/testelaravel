<?php
class Documento extends Eloquent{
  protected $table = "documentos";
  protected $fillable = ["numero","tipo","pessoa_id"];
  public $timestamps = false;

  public function pessoa(){
    return $this->belongsTo("Pessoa");
  }
   
}