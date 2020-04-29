@extends('layouts.admin')
  @section('admin')
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Give an Award</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item">Award</li>
              <li class="breadcrumb-item active" aria-current="page">Give an Award</li>
            </ol>
          </div>
        </div>
        <!-- Awards Page Section-->
   
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4 align-self-xl-center">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  		<h6 class="m-0 font-weight-bold text-primary fas fa-trophy"> Give an Award</h6>	
                </div>
                <div class="card-body align-items-center justify-content-between">
                  <form>

                    <div class="form-group">
                      <label>Award Name</label>
                      <select class="form-control col-lg-6 font-weight-bold">
                        <option>The Employee of the Month</option>
                        <option>Best Attendance Award</option>
                        <option>BEHAVIOUR AND VALUE AWARDS</option>
                        <option>Best Customer Centricity</option>
                        <option>Most Improved Performer</option>
                        <option>Best Team Player</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Employee Name</label>
                      <select class="form-control col-lg-6">
                        <option>Default select</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Description</label>
                      <textarea rows="8" class="form-control col-lg-6"></textarea>
                    </div>

                    <div class="form-group">
                      <label>Gift Item</label>
                      <input class="form-control col-lg-6">
                    </div>

                    <div class="form-group">
                      <label>Cash Price</label>
                      <input class="form-control col-lg-6">
                    </div>

                    <div class="form-group">
                      <label>Date</label>
                      <input type="Date" class="form-control col-lg-6 font-weight-bold">
                    </div>


                    <button type="submit" class="btn btn-success col-4 mb-3 ml-5 p-2 w-25">Submit</button>
                  </form>
                </div>
              </div>
          </div>
    @endsection