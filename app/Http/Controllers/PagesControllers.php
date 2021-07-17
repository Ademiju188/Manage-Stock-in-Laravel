<?php

namespace App\Http\Controllers;

use App\Models\stock;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Client\Response;


use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function showuser()
    {
        return view('user.profile');
    }

    public function outofstock()
    {
        $out = DB::select('select * from stocks where stock_alert <= 20');
        return view('stock.outofstock', ['outs' => $out]);
    }
}
