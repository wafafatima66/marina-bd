<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Singleroom;
use App\Single;

class SingleRoomController extends Controller
{
     public function single()
    {
        return view('single.single');
    }

    public function store(Request $request) {
      $this->validate($request, [
      'category' => 'required',
      ]);

    $singleroom = new Singleroom;
    $singleroom->name = $request->input('name');
    $singleroom->category = $request->input('category');
    $singleroom->save();
    return redirect()->route("reserve.roomcustomer")->with('message', 'Successful');
    } 

    public function create(){
        return view('single.create');
    }
    
    public function payment() {
        return view("payment.payemnt");
    }

    public function storesinglecustomer(Request $request) {
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

    $single = new Single;
    $single->a_date = $request->a_date;
    $single->l_date = $request->l_date;
    $single->name = $request->name;
    $single->email = $request->email;
    $single->phone = $request->phone;
    $single->gender = $request->gender;
    $single->total_room = $request->total_room;
    $single->total_member = $request->total_member;
    $single->address = $request->address;
    $single->save();
    return redirect("payment")->with('message', 'Successful');
    // return redirect('payment/customer');
    }

    
}
