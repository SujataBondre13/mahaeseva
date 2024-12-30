<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\contact;

class Contact_Controller extends Controller
{
    function Contact_Count(Request $request)
    {
        $Contact_Count = contact::count();
        return view('admin\dashboard', compact('Contact_Count'));
    }

    function List(Request $request)
    {
        $contactData = contact::all();
        return view('admin\contact\list', compact('contactData'));
    }

    function Create(Request $request)
    {
        return view('website\contact_form');
    }

    function Store(Request $request)
    {
        $contact = new contact;
        $contact->Name = $request->name;
        $contact->Email = $request->email;
        $contact->Mobile_Number = $request->phone;
        $contact->Project = $request->project;
        $contact->Subject = $request->subject;
        $contact->Message = $request->message;
        $contact->save();
        return redirect('/mahaeseva/contact')->with('success', 'Message send Successfully');
    }

    function Destroy(Request $request, $id)
    {
        $deleteContact = contact::find($request->id);
        $deleteContact->delete();
        return redirect('/admin/contact/list')->with('success', 'Contact Deleted Successfully');
    }

}
