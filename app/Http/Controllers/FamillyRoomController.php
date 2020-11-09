<?php

namespace App\Http\Controllers;
use App\Famillyroom;
use App\Familly;

use Illuminate\Http\Request;

class FamillyRoomController extends Controller
{
   public function familly() {
        return view('familly.familly');
      }

      public function store(Request $request) {
      $this->validate($request, [
        'name' => 'required',
        'category' => 'required',
      ]);

    $famillyroom = new Famillyroom;
    $famillyroom->name = $request->input('name');
    $famillyroom->category = $request->input('category');
    $famillyroom->save();
    return redirect()->route("reserve.famillycustomer")->with('message', 'Successful');
    } 

    public function create(){
        return view('familly.create');
    }

    public function storefamillycustomer(Request $request) {
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

    $familly= new Familly;
    $familly->a_date = $request->a_date;
    $familly->l_date = $request->l_date;
    $familly->name = $request->name;
    $familly->email = $request->email;
    $familly->phone = $request->phone;
    $familly->gender = $request->gender;
    $familly->total_room = $request->total_room;
    $familly->total_member = $request->total_member;
    $familly->address = $request->address;
    $familly->save();
    return redirect()->route("customer.payment")->with('message', 'Successful');
    // return response()->json($double);
    }
}
