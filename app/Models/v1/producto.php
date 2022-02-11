<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
class producto extends Model
{
use HasUUID;
    protected $table='producto';
    protected $primarykey="id";
    //poner que el id no es incremental 
    public $incrementing=false;
    //y se debe especificar el tipo de dato
    protected $KeyTipe="string";
    protected $uuidFieldName='id';
    protected $codigo='codigo';
    protected $nombre='nombre';
}   