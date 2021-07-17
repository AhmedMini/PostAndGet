<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //

    public $timestamps=false;
    protected $fillable = [
        'invoice_no', 'route_no', 'total_ammount', 'route_name',
    ];

    public function route()
    {
        return $this->belobgTo('App\Route');
    }
}

