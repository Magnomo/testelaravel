<?php
class Estado extends Eloquent{
  protected $table = "estados";
  protected $fillable = ["nome","uf","pais_id"];
  public $timestamps = false;

  public function cidades(){
    return $this->hasMany("Cidade");
  }

  public function pais(){
    return $this->belongsTo("Pais");
  }
   
}