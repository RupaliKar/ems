@extends('layouts.admin')
  @section('admin')
  <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Notice Board Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              
              <li class="breadcrumb-item active" aria-current="page">Notice Board</li>
            </ol>
          </div>
    <div class="row">

            <!--Notice Board DataTable with Hover Section-->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="admin-notice-add-notice"><button type="button" class="btn btn-success" data-toggle="modal">Add Notice</button></a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created On</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>1</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>New York</td>
                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateNotice"
                    	id="#updateNoticeBoard"><i class="fas fa-user-edit">Update</i></button>
                		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteNotice"
                    	id="#deleteNoticeBoard"><i class="fas fa-trash">Delete</i></button>
                    	</td>
                      </tr>
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



          <!--Update Notice Modal Center -->
          <form>
          	<div class="modal fade" id="updateNotice" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="updateNoticeBoard">Update Leave</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
          <div class="modal-body">
              <input class="form-control  mb-3" type="text" placeholder="Update Leave Types">
              <input class="form-control  mb-3" type="text" placeholder="Update Number Of Leaves">
        </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-warning">Update</button>
    </div>
  </div>
  </div>
</div>
          </form>

@endsection

