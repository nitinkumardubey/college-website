<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Home extends Model
{
    use Sortable;

    protected $guarded=[];
  // protected $fillable=['name'];

   public $sortable = ['id',
   'product_name',
                  'source_type',
                  'source_purpose',
                  'price',
                  'currency',
                  'weight', 
                  'unit', 
                  'capability',
                  'certifications',
                  'ship_pay',
                  'shipping_method',
                  'destination_country',
                  'time', 
                  'payment_term',
                  'trade_terms',
                  'details',
                  'requirements',
                  'name',
                  'email',
                  'mobile',
                  'company_name',
                
                  'company_address',
                  'country',
                  'state',
                  'city',
                  'zipcode'
   ,'created_at'];
}
