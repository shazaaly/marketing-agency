<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class IndexController extends Controller
{
    //

    public  function index(){


        return view('layouts.index');

    }

    public  function innerPage(){
        return view('layouts.inner-page');

    }

    public  function portfolio(){
        return view('layouts.portfolio');

    }


}
