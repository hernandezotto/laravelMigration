<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formation_program extends Model
{
    protected $table='formation_programs';
    protected $primaryKey='id';
    protected $fillable=['name','abbrevation'];

}
