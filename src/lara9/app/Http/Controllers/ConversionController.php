<?php

namespace App\Http\Controllers;

use App\Models\Conversion;

class ConversionController extends \Illuminate\Routing\Controller
{
    public function index() {
        $start = microtime(true);

        $q = Conversion::query();
        $recs = $q->lazyById(1000, $column = 'id');

        $cnt = 0;
        foreach ($recs as $rec) {
            $cnt++;
        }

        echo implode('<br>', [
            microtime(true) - $start,
            memory_get_peak_usage(),
            $cnt,
        ]);
    }
}
