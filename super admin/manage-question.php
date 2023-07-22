<?php include 'partials/sidebar.php';?>

<div class="body-wrapper">

    <?php include 'partials/navbar.php';?>

    <div class="container-fluid">


        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Manage Questions</h4>
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
                <ul class="nav nav-pills user-profile-tab justify-content-end mt-2 bg-light-info rounded-2"
                    id="pills-tab" role="tablist">

                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                            id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                            role="tab" aria-controls="pills-profile" aria-selected="true">
                            <i class="ti ti-eye me-2 fs-6"></i>
                            <span class="d-none d-md-block">View Questions</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                            id="pills-followers-tab" data-bs-toggle="pill" data-bs-target="#pills-followers"
                            type="button" role="tab" aria-controls="pills-followers" aria-selected="false">
                            <i class="ti ti-plus me-2 fs-6"></i>
                            <span class="d-none d-md-block">Add new</span>
                        </button>
                    </li>
                </ul>


                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab" tabindex="0">

                        <div class="table-responsive">
                            <div id="zero_config_wrapper" class="dataTables_wrapper">
                                <table id="zero_config" class="table border  table-bordered text-nowrap dataTable"
                                    aria-describedby="zero_config_info">
                                    <thead>

                                        <tr>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="zero_config"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending"
                                                style="width: 155.391px;">
                                                Question</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 257.406px;">Option 1</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 115.703px;">Option 2</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 46.125px;">Option 3
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Start date: activate to sort column ascending"
                                                style="width: 106.969px;">Option 4</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Start date: activate to sort column ascending"
                                                style="width: 106.969px;">Answer</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 102.406px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td class="sorting_1">ghfghfghfghhh</td>
                                            <td>dfdf</td>
                                            <td>dfdsf</td>
                                            <td>fddsf</td>
                                            <td>fdgfdg</td>
                                            <td>fdgfdg</td>
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
                                            <td class="sorting_1">ghfh</td>
                                            <td>hggfh</td>
                                            <td>ghfg</td>
                                            <td>hggfh</td>
                                            <td>hgfh</td>
                                            <td>ghfghfgh</td>
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
                    <div class="tab-pane fade" id="pills-followers" role="tabpanel"
                        aria-labelledby="pills-followers-tab" tabindex="0">

                        <form action="" class="pt-5">
                            <div class="row">

                                <div class="col-lg-12 pb-3">
                                    <label for="" class="form-label">Upload Excel (optional)</label>
                                    <input class="form-control" type="file" name="" id="">
                                </div>


                                <div class="col-lg-12 pb-3">
                                    <label class="form-label" for="">Question</label>
                                    <textarea class="form-control" cols="30" type="text"></textarea>
                                </div>

                                <div class="col-lg-6 pb-3">
                                    <label class="form-label" for="">Option 1</label>
                                    <input class="form-control" type="text">
                                </div>

                                <div class="col-lg-6 pb-3">
                                    <label class="form-label" for="">Option 2</label>
                                    <input class="form-control" type="text">
                                </div>

                                <div class="col-lg-6 pb-3">
                                    <label class="form-label" for="">Option 3</label>
                                    <input class="form-control" type="text">
                                </div>

                                <div class="col-lg-6 pb-3">
                                    <label class="form-label" for="">Option 4</label>
                                    <input class="form-control" type="text">
                                </div>

                                <div class="col-lg-12 pb-3">
                                    <label class="form-label" for="">Answers</label>
                                    <select class="select2 form-control select2-hidden-accessible"
                                        style="width: 100%; height: 36px" data-select2-id="select2-data-1-ypuw"
                                        tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-3-odtd">option 1</option>
                                        <option data-select2-id="select2-data-3-odtd">option 2</option>
                                        <option data-select2-id="select2-data-3-odtd">option 3</option>
                                        <option data-select2-id="select2-data-3-odtd">option 4</option>
                                    </select>

                                </div>

                                <div class="text-end">
                                    <button class="btn btn-primary">Submit</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>


        <!-- <div class="card">
            <div class="card-body">
                <div>
                    <h3>Upload Via Excel</h3>
                    <p>If you have the questions of excel sheet, then you can upload here</p>
                </div>
                <form action="">
                    <input type="file" class="form-control">
                    <button class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div> -->


        <!-- 
        <div class="card">
            <div class="card-body">
                <div id="education_fields" class="my-4"></div>
                <form class="row">
                    <div class="col-10">
                        <div class="mb-3">
                            <label  class="form-label">Question</label>
                            <textarea  class="form-control"
                                placeholder="School Name"></textarea>
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="mb-3">
                            <label  class="form-label">Option 1</label>
                            <input type="text" class="form-control"
                                placeholder="School Name">
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="mb-3">
                            <label  class="form-label">Option 2</label>
                            <input type="text" class="form-control"
                                placeholder="School Name">
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="mb-3">
                            <label  class="form-label">Option 3</label>
                            <input type="text" class="form-control"
                                placeholder="School Name">
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="mb-3">
                            <label  class="form-label">Option 4</label>
                            <input type="text" class="form-control"
                                placeholder="School Name">
                        </div>
                    </div>

                    <div class="col-10">
                        <div class="mb-3">
                            <label  class="form-label">Answer</label>
                            <input type="text" class="form-control"
                                placeholder="School Name">
                        </div>
                    </div>



                    <div class="col-2 pt-4">
                        <div class="mb-3"> 
                            <button onclick="qustionForm();" class="btn btn-success  font-weight-medium  waves-effect waves-light" type="button">
                                <i class="ti ti-circle-plus fs-5"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> -->


    </div>
</div>
</div>

<!-- QUESTION EDIT MODAL -->

<div class="modal fade" id="user-edit" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Edit Question
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="" class="pt-5">
                    <div class="row">
                        <div class="col-lg-12 pb-3">
                            <label class="form-label" for="">Question</label>
                            <textarea class="form-control" cols="30" type="text"></textarea>
                        </div>

                        <div class="col-lg-6 pb-3">
                            <label class="form-label" for="">Option 1</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="col-lg-6 pb-3">
                            <label class="form-label" for="">Option 2</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="col-lg-6 pb-3">
                            <label class="form-label" for="">Option 3</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="col-lg-6 pb-3">
                            <label class="form-label" for="">Option 4</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="col-lg-12 pb-3">
                            <label class="form-label" for="">Answers</label>
                            <select class="select2 form-control select2-hidden-accessible"
                                style="width: 100%; height: 36px" data-select2-id="select2-data-1-ypuw" tabindex="-1"
                                aria-hidden="true">
                                <option data-select2-id="select2-data-3-odtd">option 1</option>
                                <option data-select2-id="select2-data-3-odtd">option 2</option>
                                <option data-select2-id="select2-data-3-odtd">option 3</option>
                                <option data-select2-id="select2-data-3-odtd">option 4</option>
                            </select>

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