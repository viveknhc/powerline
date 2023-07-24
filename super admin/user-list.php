<?php include 'partials/sidebar.php';?>

<div class="body-wrapper">

    <?php include 'partials/navbar.php';?>

    <div class="container-fluid">


        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">User List</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="index">Dashboard</a></li>
                              <li class="breadcrumb-item" aria-current="page">user list</li>
                            </ol>
                          </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
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

<!-- EDIT MODAL -->

<div class="modal fade" id="user-edit" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Edit user details
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
                <button type="button" class="btn btn-light-primary text-primary font-medium waves-effect text-start">
                    Update
                </button>

                <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect text-start"
                    data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>

    </div>

</div>




<?php include 'partials/footer.php';?>