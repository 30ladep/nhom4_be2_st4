<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table='partners';
    protected $fillable=['id','name','image'];
    public $timestamps=false;
}
