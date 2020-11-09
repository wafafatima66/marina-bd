@extends('default')
@section('content')
  <div class="container">
    <div class="admin-section">
      <h1>This is admin panel</h1>
    </div>
  </div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
    <table class="table bg-primary mt-5">
    <thead>
      <tr>
        <th scope="col"><h4>Admin Panel List</h4></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><h5><a href="{{ Route('all.customer') }}" style="color: #ffff; text-decoration: none; ">View single room registered customers</a></h5></th>
      </tr>
      <tr>
      <th scope="row"><h5><a href="" style="color: #ffff; text-decoration: none;">View double room registered customers</a></h5></th>
      </tr>
      <tr>
      <th scope="row"><h5><a href="" style="color: #ffff; text-decoration: none;">View tripple room registered customers</a></h5></th>
      </tr>
      <tr>
      <th scope="row"><h5><a href="" style="color: #ffff; text-decoration: none;">View familly room registered customers</a></h5></th>
      </tr>

      <tr>
      <th scope="row"><h5><a href="" style="color: #ffff; text-decoration: none;">Add Rooms</a></h5></th>
      </tr>

       <tr>
      <th scope="row"><h5><a href="" style="color: #ffff; text-decoration: none;">Add testimonial </a></h5></th>
      </tr>

      <tr>
      <th scope="row"><h5><a href="" style="color: #ffff; text-decoration: none;">Add Blog </a></h5></th>
      </tr>
      </tbody>
    </table>
    </div>
    <div class="col-sm-8"></div>
  </div>
</div>

@endsection