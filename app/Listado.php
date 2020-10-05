<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listado extends Model
{
  protected $table ="usuario";
  protected $primaryKey = 'id';
  protected $fillable = ['name','apaterno','amaterno','rfc','fechanacimiento'];
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';
}
