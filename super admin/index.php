<?php include 'partials/sidebar.php';?>

<div class="body-wrapper">

  <?php include 'partials/navbar.php';?>

  <div class="container-fluid">



    <div class="row">
      <div class="col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <div
                class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center bg-success">
                <i class="ti ti-user fs-6"></i>
              </div>
              <div class="ms-3 align-self-center">
                <h4 class="mb-0 fs-5">Total Users</h4>
                <span class="text-muted">Employees</span>
              </div>
              <div class="ms-auto align-self-center">
                <h2 class="fs-7 mb-0">89</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <div class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center bg-info">
                <i class="ti ti-credit-card fs-6"></i>
              </div>
              <div class="ms-3 align-self-center">
                <h4 class="mb-0 fs-5">Total Branches</h4>
                <span class="text-muted">Branches</span>
              </div>
              <div class="ms-auto align-self-center">
                <h2 class="fs-7 mb-0">10</h2>
              </div>
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
                  <table id="zero_config" class="table border  table-bordered text-nowrap dataTable"
                      aria-describedby="zero_config_info">
                      <thead>

                          <tr>
                              <th class="sorting sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                  colspan="1" aria-sort="ascending"
                                  aria-label="Name: activate to sort column descending" style="width: 155.391px;">
                                  Employee Id</th>
                              <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                  aria-label="Position: activate to sort column ascending"
                                  style="width: 257.406px;">Name</th>
                              <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                  aria-label="Office: activate to sort column ascending"
                                  style="width: 115.703px;">Email</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                  aria-label="Office: activate to sort column ascending"
                                  style="width: 115.703px;">Phone</th>

                                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                  aria-label="Office: activate to sort column ascending"
                                  style="width: 115.703px;">Address</th>

                                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                  aria-label="Office: activate to sort column ascending"
                                  style="width: 115.703px;">Passport Number</th>


                           
                              <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                  aria-label="Start date: activate to sort column ascending"
                                  style="width: 106.969px;">Status</th>
                              <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                  aria-label="Salary: activate to sort column ascending"
                                  style="width: 102.406px;">Action</th>
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
                              <td><button type="button"
                                      class="btn mb-1 waves-effect waves-light btn-rounded btn-outline-success">
                                      Active
                                  </button></td>
                              <td>
                                  <button type="button" class="btn btn-light-danger btn-circle">
                                      <i class="fs-5 ti  ti-trash text-danger"></i>
                                  </button>

                                  <button type="button" class="btn btn-light-primary btn-circle"
                                      data-bs-toggle="modal" data-bs-target="#user-edit">
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
                              <td><button type="button"
                                      class="btn mb-1 waves-effect waves-light btn-rounded btn-outline-danger">
                                      Suspend
                                  </button></td>
                              <td><button type="button" class="btn btn-light-danger btn-circle">
                                      <i class="fs-5 ti ti-trash text-danger"></i>
                                  </button>

                                  <button type="button" class="btn btn-light-primary btn-circle"
                                      data-bs-toggle="modal" data-bs-target="#user-edit">
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
</div>




<?php include 'partials/footer.php';?>