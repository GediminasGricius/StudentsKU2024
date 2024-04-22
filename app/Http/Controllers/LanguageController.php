<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public  function  setLocale(Request $request, $locale){
        $request->session()->put('lang',$locale);
        return redirect()->back();

    }
}
