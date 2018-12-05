<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $table="archivos";
    protected $fillable=['url', 'id_publicacion'];
    public $timestamps="false";
}
