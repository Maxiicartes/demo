<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QRController extends Controller
{
    public function QR($tipo, $id)
    {
        return view('qr', compact('tipo', 'id'));
    }
}
