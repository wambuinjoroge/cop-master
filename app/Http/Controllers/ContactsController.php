<?php

namespace App\Http\Controllers;

use Request;

use App\EmploymentDetails;

class ContactsController extends Controller
{
    public function index()
    {
    	$contacts = EmploymentDetails::all();

    	return view('Contacts.index', compact('contacts'));
    }
    public function viewContactDetails($id)
    {
    	$contact = EmploymentDetails::find($id);

    	return view('Contacts.contact_details', compact('contact'));
    }
    public function searchContact(Request $request)
    {
    	$input = Request::all();
    	$contacts = EmploymentDetails::where('business_name','LIKE', '%'.$input['search'].'%')->get();

    	return view('Contacts.index', compact('contacts'));
    }
}
