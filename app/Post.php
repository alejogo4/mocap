<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="publicaciones";
    protected $fillable=['nombre', 'descripcion', 'imgPublicacion'];
    public $timestamps=false;
}
