@extends('default')
@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col-sm-5">Room List</th>
              <th scope="col-sm-7">Room numbers</th>
            </tr>
          </thead>
          <h4>Chose your familly room</h4><br>  
          <tbody>
            <tr>
              <th scope="row">Familly Room</th>
              <td>
                <form action="{{ route('store.familly_room') }}" method="POST">  
                    @csrf  
                    <div class="form-group">
                      <label class="" for="name">Your name</label>
                      <input required type="text" name="name" class="form-control" placeholder="Enter your full name">
                    </div> 
                    <label for="Category"><strong>Select your suitable familly room: </strong></label><br>
                    <label><input type="checkbox" name="category[]" value="601">601</label>    
                    <label><input type="checkbox" name="category[]" value="602">602</label> 
                    <label><input type="checkbox" name="category[]" value="603">603</label>
                    <label><input type="checkbox" name="category[]" value="604">604</label>
                    <label><input type="checkbox" name="category[]" value="605">605</label>
                    <label><input type="checkbox" name="category[]" value="606">606</label><br>
                    <label><input type="checkbox" name="category[]" value="607">607</label>
                    <label><input type="checkbox" name="category[]" value="608">608</label>
                    <label><input type="checkbox" name="category[]" value="609">609</label>
                    <label><input type="checkbox" name="category[]" value="610">610</label>
                    <label><input type="checkbox" name="category[]" value="611">611</label>
                    <label><input type="checkbox" name="category[]" value="612">612</label>
                    <br><br>       
                    <input type="submit" class="btn btn-primary" value="Reserve"/>      
                </form>
              </td>
            </tr>
          </tbody>
        </table>
    </div>
  </div>
   <h1 class="text-center mb-5">Some single room sample</h1>
  <div class="row">
    <div class="col-sm-4">
      <div class="room-image">
         <img src="images/603/1.jpg" alt="" style="height: 400px; width: 350px;">
      </div>
    </div>

    <div class="col-sm-4">
      <div class="room-image">
         <img src="images/603/2.jpg" alt="" style="height: 400px; width: 350px;">
      </div>
    </div>

    <div class="col-sm-4">
      <div class="room-image">
         <img src="images/603/3.jpg" alt="" style="height: 400px; width: 350px;">
      </div>
    </div>

  </div>
</div>
@stop
