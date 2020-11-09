@extends('default')
@section('content')

  <!-- Registration area -->
  <div id="reserve" class="section">
      <div class="section-center">
          <div class="container">
              <div class="row">
                  <div class="reserve-form">
                      <div class="form-header">
                          <h1>Book a Room</h1>
                      </div>
                      <form>
                          <div class="row">
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <span class="form-label">Name</span>
                                      <input class="form-control" type="text" placeholder="Enter your name">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <span class="form-label">Email</span>
                                      <input class="form-control" type="email" placeholder="Enter your email">
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <span class="form-label">Phone</span>
                              <input class="form-control" type="tel" placeholder="Enter your phone number">
                          </div>
                          <div class="form-group">
                              <span class="form-label">Total member</span>
                              <input class="form-control" type="text" placeholder="How many Members you are">
                          </div>
                          <div class="form-group">
                            <span class="form-label">Arrive Date</span>
                            <input class="form-control" type="date" required>
                        </div>
                        <div class="form-group">
                          <span class="form-label">Leave Date</span>
                          <input class="form-control" type="date" required>
                        </div>

                        <div class="form-group">
                            <span class="form-label">Address</span>
                            <!-- <input required type="text" name="address" class="form-control" placeholder="type your present address"> -->
                            <textarea name="text" class="form-control" cols="40" rows="10"></textarea>
                        </div>
                        <div class="form-btn">
                            <button type="submit" class="submit-btn">Book Now</button>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- End registration form -->
@stop
