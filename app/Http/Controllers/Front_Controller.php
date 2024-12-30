<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\service;

class Front_Controller extends Controller
{

    function Index_Services(Request $request)
    {
        $serviceData = service::all();
        return view('website\index', compact('serviceData'));
    }

    function Contact(Request $request)
    {
        return view('website\contact');
    }

    function Service(Request $request)
    {
        $ServiceData = service::all();
        return view('website\service', compact('ServiceData'));
    }

    function About(Request $request)
    {
        return view('website\about');
    }

}
