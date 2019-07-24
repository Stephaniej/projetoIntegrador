<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class pedidoController extends Controller
{
    public function pedido()
    {
        return view('pedido');
    }
}
