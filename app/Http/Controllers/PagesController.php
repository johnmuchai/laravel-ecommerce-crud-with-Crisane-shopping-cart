<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nduthi;

class PagesController extends Controller
{
    public function getIndex(){
        $nduthi = Nduthi::orderBy('created_at', 'desc')->limit(9)->get();
        return view('home')->withNduthi($nduthi);
    }
}
