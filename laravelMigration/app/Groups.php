<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $table='groups';
    protected $primaryKey='id';
    protected $fillable=['name','formation_programs_id'];

}
