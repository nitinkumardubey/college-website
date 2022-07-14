<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;

class User extends Authenticatable
{
    use Notifiable;
    use Sortable;
 
   
    protected $fillable = ['name', 'email', 'password','mobile','mobile2','supplier_address','weblink','company_name','company_address','country','city','state','zipcode','img1','img2','img3','img4','user_type','added_name','added_id','added_user_type','role','personal_email','user_type','payment_vendor','payment_start','payment_expires','payment_status','gst_no'];

    // protected $guarded=[];
     
    protected $hidden = [
        'password', 'remember_token',
    ];

    


    public $sortable = ['id','name','email','role','supplier_address','status','created_at'];
    
    
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
