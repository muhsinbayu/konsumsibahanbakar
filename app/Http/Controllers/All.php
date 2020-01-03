<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class All extends Controller
{
    public function storeRADIS (Request $request)
    {
        $rt = $request->input('rt');
        $delta_0 = $request->input('delta_0');
        $delta = $request->input('delta');
        //dd($rt, $delta, $delta_0);

        $radis = 0.65*$rt*(($delta_0/$delta)-1);

        //return view with compact radis
        return view('radis.hasilradis', compact('radis'));

    }

    public function storeRAS (Request $request)
    {
        $rt = $request->input('rt');
        $pw = $request->input('pw');
        $pw0 = $request->input('pw0');
        $rf = $request->input('rf');
        $cf = $request->input('cf');
        $cf0 = $request->input('cf0');

        //$temp = ($rt*(1-($pw/$pw0)));
        //$temp2 = ($rf*(1-($cf/$cf0)));

        $ras = ($rt*(1-($pw/$pw0)))-($rf*(1-($cf/$cf0)));

        return view('ras.hasilras', compact('ras'));
    }

    public function storeRWIND(Request $request)
    {
        $pair = $request->input('pair');
        $v2air = $request->input('v2air');
        $cx = $request->input('cx');
        $af = $request->input('af');

        $rwind = (1/2)*$pair*$v2air*$cx*$af;

        return view('rwind.hasilrwind', compact('rwind'));
    }

    public function storeRAWL(Request $request)
    {
        //baru return aja
        return view('rawl.hasilrawl', compact('rawl'));
    }

}
