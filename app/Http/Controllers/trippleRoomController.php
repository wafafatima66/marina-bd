<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trippleroom;
use App\Tripple;
class TrippleRoomController extends Controller
{
     public function tripple() {
        return view('tripple.tripple');
      }

      public function store(Request $request) {
      $this->validate($request, [
        'name' => 'required',
        'category' => 'required',
      ]);

    $trippleroom = new Trippleroom;
    $trippleroom->name = $request->input('name');
    $trippleroom->category = $request->input('category');
    $trippleroom->save();
    return redirect()->route("reserve.tripplecustomer")->with('message', 'Successful');
    } 

    public function create(){
        return view('tripple.create');
    }

    public function storetripplecustomer(Request $request) {
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

    $tripple= new Tripple;
    $tripple->a_date = $request->a_date;
    $tripple->l_date = $request->l_date;
    $tripple->name = $request->name;
    $tripple->email = $request->email;
    $tripple->phone = $request->phone;
    $tripple->gender = $request->gender;
    $tripple->total_room = $request->total_room;
    $tripple->total_member = $request->total_member;
    $tripple->address = $request->address;
    $tripple->save();
    return redirect()->route("customer.payment")->with('message', 'Successful');
    // return response()->json($double);
    // return redirect('payment/customer');
    }
}
