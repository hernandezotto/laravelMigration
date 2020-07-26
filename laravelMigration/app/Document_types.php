<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document_types extends Model
{
    protected $table='document_types';
    protected $primaryKey='id';
    protected $fillable=['name'];
}
