<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class BrowserShotController extends Controller
{
    public function index(){
        $test = Browsershot::url('https://example.com')->bodyHtml();
        dd($test);
//        //        Browsershot::url('https://example.com')->save('example.pdf');
    }
}
