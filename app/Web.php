<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Web extends Model
{
   
    protected $fillable=['name','url','mobile','email','fb','whatsapp','youtube','instagram','address','min_order'];

   
}