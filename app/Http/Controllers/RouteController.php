<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    function getandset()
    
    {
        
        $selesman = DB::table('routes')
        ->select(DB::raw('sum(total_seals) as total, route_name'))
        
        ->groupBy('route_no')
        ->get();
        return $selesman;
    }
}
