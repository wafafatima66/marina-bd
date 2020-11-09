@extends('default')
@section('content')

<div class="container">
  <p>
  <a href="" class="btn btn-success mt-5">Add Student</a>
  </p>
  <hr>
  <table class="table table-responsive"> 
  <tr>
    <th>SL</th>
    <th>Customer Name</th>
    <th>Customer Email</th>
    <th>Customer Phone</th>
    <th>Total Member</th>
    <th>Customer Arrival Date</th>
    <th>Customer Leave Date</th>
    <th>Student  Address</th>
    <th>Action</th>
  </tr>
  @foreach($registration as $row)
  <tr>
  <td>{{ $row->id }}</td>
    <td>{{ $row->name }}</td>
    <td>{{ $row->email }}</td>
    <td>{{ $row->phone }}</td>
    <td>{{ $row->member }}</td>
    <td>{{ $row->a_date }}</td>
    <td>{{ $row->l_date }}</td>
    <td>{{ $row->address }}</td>
    <td>
    <a href="{{ URL::to('view/single_customer/' .$row->id) }}" class="btn btn-sm btn-success">view</a>
    <a href="{{ URL::to('delete/single-customer/' .$row->id) }}" class="btn btn-sm btn-danger delete">Delete</a>
    </td>
  </tr>
    @endforeach
  </table>
</div>



@endsection