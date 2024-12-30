<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\service;

class Back_Controller extends Controller
{
    function Count(Request $request)
    {
        $Service_Count = service::count();
        $Contact_Count = contact::count();
        return view('admin\dashboard', compact('Contact_Count', 'Service_Count'));
    }

}
