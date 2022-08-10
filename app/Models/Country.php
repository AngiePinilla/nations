<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //la tabla a conectar
    protected $table = "countries";
    //Clave primaria de esa tabla
    protected $primaryKey="country_id";
    //omitir campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //Many to Many. Country - Language
    //relationship

    public function languages(){

        //belongsToMany Method:
        //1. related Model
        //2. pivot table(intermediate table)
        //3. Foreign Key Current Model
        //4. Foreign Key of relates Model
        return $this->belongsToMany(Language::class , 'country_languages' , 'country_id' , 'language_id')->withPivot('official');

        
    }

    //M-1 Country-region relationship

    public function regions(){
        //Belongs To Method: Parameters
        //1. Related model 
        //2. Foreign Key of related model in current model 
         
        return $this->belongsTo(Region::class , 'region_id' );
    }
}
