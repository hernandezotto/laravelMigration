<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genders extends Model
{
    protected $table='genders';
    protected $primaryKey='id';
    protected $fillable=['name'];
}
