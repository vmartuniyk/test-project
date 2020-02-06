<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function index () {

         $contacts = Contact::sortable()->where('isActive','1')->paginate(2);
         return view('home',compact('contacts'));
     }


}
