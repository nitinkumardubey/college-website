<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class Message extends Model
{
    protected $fillable = ['name','email','mobile','subject','message'];
    use Sortable;

    public $sortable = ['id','name','email','mobile','subject','message','created_at'];
}
