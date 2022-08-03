<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model{
    //la tabla a conectar
    protected $table = "continents";
    //Clave primaria de esa tabla
    protected $primaryKey="continent_id";
    //omitir campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //Relacion entre continente y regiones

    public function regiones(){
        //parameters
        //1. Linked model
        //2. foreign key of current model into related model region 

        return $this->hasMany(Region::class,'continent_id');
    }
}
