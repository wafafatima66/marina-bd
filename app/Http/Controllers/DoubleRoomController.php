<?php

namespace App\Http\Controllers;
use App\Doubleroom;
use App\Double;
use Illuminate\Http\Request;

class DoubleRoomController extends Controller
{
    public function double() {
        return view('double.double');
      }

   public function store(Request $request) {
      $this->validate($request, [
        'name' => 'required',
        'category' => 'required',
      ]);

    $doubleroom = new Doubleroom;
    $doubleroom->name = $request->input('name');
    $doubleroom->category = $request->input('category');
    $doubleroom->save();
    return redirect()->route("reserve.doublecustomer")->with('message', 'Successful');
    } 

    public function create(){
        return view('double.create');
    }

    public function payment() {
        return view("payment.payemnt");
    }

    public function storedoublecustomer(Request $request) {
      $this->validate($request, [
      'a_date' => 'required|string',
      'l_date' => 'required|string',
      'name' => 'required',
      'email' => 'required|unique:singles',
      'phone' => 'required|unique:singles',
      'gender' => 'required',
      'total_room' => 'required|unique:singles',
      'total_member' => 'required|unique:singles',
      'address' => 'required|unique:singles',
      ]);

    $double= new Double;
    $double->a_date = $request->a_date;
    $double->l_date = $request->l_date;
    $double->name = $request->name;
    $double->email = $request->email;
    $double->phone = $request->phone;
    $double->gender = $request->gender;
    $double->total_room = $request->total_room;
    $double->total_member = $request->total_member;
    $double->address = $request->address;
    $double->save();
    return redirect()->route("customer.payment")->with('message', 'Successful');
    // return response()->json($double);
    }

    public function AllCustomer(){
    $registration = Registration::all();
    return view('customer.index',compact('registration'));
  }

   public function ViewDoubleCustomer($id) {

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
