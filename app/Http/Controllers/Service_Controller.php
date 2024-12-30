<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\service;

class Service_Controller extends Controller
{
    function Service_Count(Request $request)
    {
        $Service_Count = service::count();
        return view('admin\dashboard', compact('Service_Count'));
    }

    // List
    function List(Request $request)
    {
        $serviceData = service::all();
        return view('admin\service\list', compact('serviceData'));
    }

    // Create (Form)
    function Create(Request $request)
    {
        return view('admin\service\create');
    }

    // Store Data
    function Store(Request $request)
    {
        $addService = new service;
        if ($request->file("s_img")) {
            $file = $request->file("s_img");
            $extension = $file->getClientOriginalExtension();
            $filename = "s_img" . time() . '.' . $extension;
            $publicFilePath = public_path('uploads/services/');
            $file->move($publicFilePath, $filename);
            $addService->Service_Name = $request->s_name;
            $addService->Service_Image = $filename;
            $addService->Service_Description = $request->s_des;
            $addService->save();
        }
        return redirect('/admin/service/list')->with('success', 'Service Added Successfully');
    }

    // View
    function View(Request $request, $id)
    {
        $viewService = service::find($id);
        return view('admin\service\view', compact('viewService'));
    }

    // Edit
    function Edit(Request $request, $id)
    {
        $editService = service::find($id);
        return view('admin\service\edit', compact('editService'));
    }

    // Update


    function Update(Request $request)
    {
        $updateService = service::find($request->s_id);
        if ($request->file("s_img")) {
            $file = $request->file("s_img");
            $extension = $file->getClientOriginalExtension();
            $filename = "s_img" . time() . '.' . $extension;
            $publicFilePath = public_path('uploads/services/');
            $file->move($publicFilePath, $filename);
            $updateService->Service_Name = $request->s_name;
            $updateService->Service_Image = $filename;
            $updateService->Service_Description = $request->s_des;
            $updateService->save();
        } else {
            $updateService->Service_Name = $request->s_name;
            $updateService->Service_Description = $request->s_des;
            $updateService->save();
        }
        return redirect('/admin/service/list')->with('success', 'Service Updated Successfully');
    }

    // Delete
    function Destroy(Request $request, $id)
    {
        $deleteService = service::find($id);
        $deleteService->delete();
        return redirect('/admin/service/list')->with('success', 'Service Deleted Successfully');
    }
}
