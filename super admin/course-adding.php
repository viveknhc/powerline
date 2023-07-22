<?php include 'partials/sidebar.php';?>

<div class="body-wrapper">

    <?php include 'partials/navbar.php';?>

    <div class="container-fluid">

        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Course Adding</h4>

                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="assets/imag" alt="" class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">

                        <div class="col-lg-6 pb-3">
                            <div class="form-group">
                                <label class="form-label">Upload Video</label>
                                <input type="url" class="form-control">
                            </div>
                        </div>


                        <div class="col-lg-6 pb-3">
                            <div class="form-group">
                                <label class="form-label">Catagory</label>

                                <select class="select2 form-control select2-hidden-accessible"
                                    style="width: 100%; height: 36px" data-select2-id="select2-data-1-nn1h"
                                    tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="select2-data-3-bxds">Section 1</option>
                                    <option data-select2-id="select2-data-3-bxds">Section 2</option>
                                    <option data-select2-id="select2-data-3-bxds">Section 3</option>
                                    <option data-select2-id="select2-data-3-bxds">Section 4</option>




                                </select>

                            </div>
                        </div>

                        <div class="col-lg-6 pb-3">
                            <div class="form-group">
                                <label class="form-label">Video Class name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6 pb-3">
                            <div class="form-group">
                                <label class="form-label">Description</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary">Upload</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>




<?php include 'partials/footer.php';?>