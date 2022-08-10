<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //la tabla a conectar
    protected $table = "languages";
    //Clave primaria de esa tabla
    protected $primaryKey="language_id";
    //omitir campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //M-M language Country
    //Relation ship

    public function paises(){

        //belongsToMany Method:
        //1. related Model
        //2. pivot table(intermediate table)
        //3. Foreign Key Current Model
        //4. Foreign Key of relates Model
        return $this->belongsToMany(Country::class , 'country_languages' , 'language_id' , 'country_id')->withPivot('official');

        
    }
   
}
