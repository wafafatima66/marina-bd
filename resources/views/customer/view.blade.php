@extends('default')
@section('content')
<div class="admin-section">
  <h1>This is view customer page</h1>
</div>



<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
   <h5>Customer Name: {{ $registration->name }} </h5>
   <p>Customer Email: {{ $registration->email }}</p>
   <p>Customer Phone: {{ $registration->phone }}</p>
   <p>Total Member: {{ $registration->member }}</p>
   <p>Customer Arrival Date: {{ $registration->a_date }}</p>
   <p>Customer Leave Date: {{ $registration->l_date }}</p>
   <p>Student Address: {{ $registration->address }}</p>
</div>
<div class="col-sm-4"></div>
</div>


@endsection