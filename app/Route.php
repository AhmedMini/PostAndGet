<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    //
    protected $fillable = [
        'route_no','route_name' ,'total_seals',
    ];

    public function invoice()
    {

        return $this->hasMany('App\Invoice' , 'route_no' , 'route_no');
    }
}