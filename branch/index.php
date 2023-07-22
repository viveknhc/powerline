<?php include 'partials/sidebar.php';?>

<div class="body-wrapper">

  <?php include 'partials/navbar.php';?>

  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100 h-100 bg-light-info overflow-hidden shadow-none">
          <div class="card-body position-relative">
            <div class="row">
              <div class="col-sm-7">
                <div class="d-flex align-items-center mb-7">
                  <div class="rounded-circle overflow-hidden me-6">
                    <img src="assets/images/profile/user-1.jpg" alt="" width="40" height="40">
                  </div>
                  <h5 class="fw-semibold mb-0 fs-5">Welcome back Company Name</h5>
                </div>
                <div class="d-flex align-items-center">
                  <div class="border-end pe-4 border-muted border-opacity-10">
                    <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">78

                    </h3>
                    <p class="mb-0 text-dark">Total Users</p>
                  </div>
                  <div class="ps-4">
                    <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">19

                    </h3>
                    <p class="mb-0 text-dark">Certified Users</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="welcome-bg-img mb-n7 text-end">
                  <img class="welcome-img" src="assets/images/backgrounds/123.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="row pt-5">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">User Manual Adding</h5>
        
            <button class="btn me-1 mb-1 btn-light-danger text-danger btn-lg px-4 fs-4 font-medium"
              data-bs-toggle="modal" data-bs-target="#user-adding">
              Add User
            </button>

            <div class="modal fade" id="user-adding" tabindex="-1" aria-labelledby="bs-example-modal-lg"
              aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myLargeModalLabel">
                      Add user
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form>
                      <div class="row">
                        <div class="col-lg-6 pb-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Employee Id</label>
                            <input type="number" class="form-control">
                          </div>
                        </div>

                        <div class="col-lg-6 pb-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>

                        <div class="col-lg-6 pb-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control">
                          </div>
                        </div>

                        <div class="col-lg-6 pb-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="number" class="form-control">
                          </div>
                        </div>

                        <div class="col-lg-6 pb-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input type="address" class="form-control">
                          </div>
                        </div>

                        <div class="col-lg-6 pb-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Passport Number</label>
                            <input type="Number" class="form-control">
                          </div>
                        </div>
                      </div>

                    </form>

                  </div>
                  <div class="modal-footer">
                    <button type="button"
                      class="btn btn-light-primary text-primary font-medium waves-effect text-start">
                      Submit
                    </button>

                    <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect text-start"
                      data-bs-dismiss="modal">
                      Close
                    </button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">

          <div class="card-body">
            <h5 class="card-title">User Adding Via Excel</h5>
       
            <button class="btn me-1 mb-1 btn-light-success text-success btn-lg px-4 fs-4 font-medium"
              data-bs-toggle="modal" data-bs-target="#user-excel-adding">
              Add User
            </button>

            <div class="modal fade" id="user-excel-adding" tabindex="-1" aria-labelledby="bs-example-modal-lg"
              aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myLargeModalLabel">
                      upload via Excel
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <div class="custom-file container">
                      <input type="file" class="form-control" required="">

                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button"
                      class="btn btn-light-primary text-primary font-medium waves-effect text-start">
                      Submit
                    </button>
                    <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect text-start"
                      data-bs-dismiss="modal">
                      Close
                    </button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="card">
      <div class="card-body">
        <div class="mb-2">
          <h3 class="mb-0">User Details</h3>
      </div>
        <div class="table-responsive">
          <div id="zero_config_wrapper" class="dataTables_wrapper">
            <div id="zero_config_wrapper" class="dataTables_wrapper no-footer">
      

              <table id="zero_config" class="table border table-bordered text-nowrap dataTable no-footer"
                aria-describedby="zero_config_info">
                <thead>

                  <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                      aria-label="
                                  Employee Id: activate to sort column descending" style="width: 103.5px;"
                      aria-sort="ascending">
                      Employee Id</th>
                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                      aria-label="Name: activate to sort column ascending" style="width: 101.531px;">Name</th>
                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                      aria-label="Email: activate to sort column ascending" style="width: 94.2344px;">Email</th>
                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                      aria-label="Phone: activate to sort column ascending" style="width: 77.7812px;">Phone</th>
                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                      aria-label="Address: activate to sort column ascending" style="width: 72.5781px;">Address</th>
                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                      aria-label="Passport Number: activate to sort column ascending" style="width: 117.281px;">Passport
                      Number</th>
                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                      aria-label="Status: activate to sort column ascending" style="width: 90.1719px;">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                      aria-label="Action: activate to sort column ascending" style="width: 87.9219px;">Action</th>
                  </tr>
                </thead>
                <tbody>



                  <tr class="odd">
                    <td class="sorting_1">EMP01</td>
                    <td>Murshid</td>
                    <td>abc@ahs.com</td>
                    <td>983646xxx</td>
                    <td>Tokyo</td>
                    <td>PS67676</td>
                    <td><button type="button" class="btn mb-1 waves-effect waves-light btn-rounded btn-outline-success">
                        Active
                      </button></td>
                    <td>
                      <button type="button" class="btn btn-light-danger btn-circle">
                        <i class="fs-5 ti  ti-trash text-danger"></i>
                      </button>

                      <button type="button" class="btn btn-light-primary btn-circle" data-bs-toggle="modal"
                        data-bs-target="#user-edit">
                        <i class="fs-5 ti  ti-pencil text-primary"></i>
                      </button>
                    </td>
                  </tr>
                  <tr class="even">
                    <td class="sorting_1">EMP02</td>
                    <td>Sharon</td>
                    <td>abc@ahs.com</td>
                    <td>983646xxx</td>
                    <td>calicut</td>
                    <td>PS67676</td>
                    <td><button type="button" class="btn mb-1 waves-effect waves-light btn-rounded btn-outline-danger">
                        Suspend
                      </button></td>
                    <td><button type="button" class="btn btn-light-danger btn-circle">
                        <i class="fs-5 ti ti-trash text-danger"></i>
                      </button>

                      <button type="button" class="btn btn-light-primary btn-circle" data-bs-toggle="modal"
                        data-bs-target="#user-edit">
                        <i class="fs-5 ti  ti-pencil text-primary"></i>
                      </button>

                    </td>
                  </tr>
                </tbody>

              </table>
         
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>




  <?php include 'partials/footer.php';?>