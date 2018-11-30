<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atacchment extends Model
{
    protected $table="archivos";
    protected $fillable=['url', 'id_publicacion'];
    public $timestamps="false";
}
