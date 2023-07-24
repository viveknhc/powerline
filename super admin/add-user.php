
<?php include 'partials/sidebar.php';?>

<div class="body-wrapper">

  <?php include 'partials/navbar.php';?>

  <div class="container-fluid">




  <div class="row">
    <div class="col-lg-6">
    <div class="">
        <div class="card">
         
          <div class="card-body">
            <h5 class="card-title">User Manual Adding</h5>
            <p class="card-text">
              With supporting text below as a natural lead-in to additional content.
            </p>
            <button class="btn me-1 mb-1 btn-light-danger text-danger btn-lg px-4 fs-4 font-medium"
                  data-bs-toggle="modal" data-bs-target="#user-adding">
                  Add User
                </button>

                <div class="modal fade" id="user-adding" tabindex="-1"
                  aria-labelledby="bs-example-modal-lg" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="myLargeModalLabel">
                         Add user
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                          aria-label="Close"></button>
                      </div>

                      <!-- MANUAL USER ADDING MODAL -->

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
                        <button type="button" class="btn btn-light-primary text-primary font-medium waves-effect text-start">
                          Submit
                        </button>

                        <button type="button"
                          class="btn btn-light-danger text-danger font-medium waves-effect text-start"
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

      <div class="">
        <div class="card">
         
          <div class="card-body">
            <h5 class="card-title">User Adding Via Excel</h5>
            <p class="card-text">
              With supporting text below as a natural lead-in to additional content.
            </p>
            <button class="btn me-1 mb-1 btn-light-success text-success btn-lg px-4 fs-4 font-medium"
                  data-bs-toggle="modal" data-bs-target="#user-excel-adding">
                  Add User
                </button>

                <div class="modal fade" id="user-excel-adding" tabindex="-1"
                  aria-labelledby="bs-example-modal-lg" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="myLargeModalLabel">
                         upload via Excel
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                          aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                        <div class="custom-file container">
                          <input type="file" class="form-control" required="">
                      
                        </div>
                   
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary text-primary font-medium waves-effect text-start">
                          Submit
                        </button>
                        <button type="button"
                          class="btn btn-light-danger text-danger font-medium waves-effect text-start"
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

    <div class="col-lg-6">
  <div>
    <img class="img-fluid" src="assets/images/add-user.png" alt="">
  </div>
    </div>

  
    </div>
  </div>
</div>
</div>




<?php include 'partials/footer.php';?>