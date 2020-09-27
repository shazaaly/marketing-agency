<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JitsiController extends Controller
{
    //

    public  function joinMeeting(){
        return view('layouts.liveChat');
    }
}
