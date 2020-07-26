<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apprentices extends Model
{
    protected $table='apprentices';
    protected $primaryKey='id';
    protected $fillable=['names','lastnames','email','document','edad','formation_programs_id','groups_id','genders_id','document_types_id'];
    
}
