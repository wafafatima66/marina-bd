<?php

namespace App\Http\Controllers;
use App\Registration;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration() {
        return view('customer.registration');
      }
  
    public function store(Request $request) {
      $this->validate($request, [
      'name' => 'required|string',
      'email' => 'required|unique:registrations',
      'phone' => 'required|unique:registrations',
      'member' => 'required|unique:registrations',
      'a_date' => 'required|unique:registrations',
      'l_date' => 'required|unique:registrations',
      'address' => 'required|max:10000'
      ]);

    $registration = new Registration;
    $registration->name = $request->name;
    $registration->email = $request->email;
    $registration->phone = $request->phone;
    $registration->member = $request->member;
    $registration->a_date = $request->a_date;
    $registration->l_date = $request->l_date;
    $registration->address = $request->address;
     $registration->save();
      return redirect()->back()->with('success', 'registration updated successfully!');
    } 

    public function AllCustomer(){
    $registration = Registration::all();
    return view('customer.index',compact('registration'));
  }

   public function ViewSingleCustomer($id) {

    $registration = Registration::findorfail($id);
    // return response()->json($student);
    return view('customer.view',compact('registration'));

  }

   public function DeleteSinglecustomer($id) {
    $registration = Registration::findorfail($id);
    $registration->delete();
    return redirect()->back()->with('success', 'student deleted successfully!');
  }
}
