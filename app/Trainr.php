<?php

namespace Crudmi;

use Illuminate\Database\Eloquent\Model;

class Trainr extends Model
{
    //Campos para actualizar
    protected $fillable = ['name', 'avatar'];
    /**
     * Para el funcionamiento del explicit binding
     * y correta muestra del slug
     */
    public function getRouteKeyName(){
        return 'slug';
    }
}