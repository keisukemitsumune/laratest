<?php

namespace App\Http\Controllers;

use App\Models\Conversion;

class ConversionController extends \Illuminate\Routing\Controller
{
    public function index() {
        $data = Conversion::all();
        echo $data->count();
    }
}
