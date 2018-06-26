<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motor extends Model
{
    protected $table='motors';
    protected $fillable=['modelo'];
    protected $guarded=['id'];
}
