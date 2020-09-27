<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    //
    public  function businessPlan(){
        return view('site.businessPlan');
    }


    public  function enterprisePlan(){
        return view('site.enterprisePlan');
    }

}
