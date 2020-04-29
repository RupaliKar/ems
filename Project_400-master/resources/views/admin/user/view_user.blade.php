@extends('layouts.admin')
  @section('admin')
  <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item">User Manage</li>
              <li class="breadcrumb-item active" aria-current="page">View User List</li>
            </ol>
          </div>
    <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add New User</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Country</th>
                        <th>Blood Group</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <!--
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Country</th>
                        <th>Blood Group</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  -->
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>
                          <a href="admin-edit-user">
                          <button type="button" class="btn btn-warning"><i class="fas fa-user-edit">Edit</i></button></a>
                		<button type="button" class="btn btn-danger"><i class="fas fa-trash">Delete</i></button>
                		<a href="admin-user-view-user_profile"><button type="button" class="btn btn-success"><li class="far fa-eye">View</li></button></a>
                    	</td>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
        </div>
        <!---Container Fluid-->
      </div>

    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
@endsection

