<?php include 'partials/sidebar.php';?>

<div class="body-wrapper">

  <?php include 'partials/navbar.php';?>
  <div class="container-fluid">

    <div class="card overflow-hidden">
      <div class="card-body p-0">
        <img src="assets/images/profilebg.png" alt="" class="img-fluid">
        <div class="row align-items-center">

          <div class="col-lg-4 mt-n3 order-lg-2 order-1">
            <div class="mt-n5">
              <div class="d-flex align-items-center justify-content-center mb-2">
                <div class="linear-gradient d-flex align-items-center justify-content-center rounded-circle"
                  style="width: 110px; height: 110px;" ;>
                  <div
                    class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden"
                    style="width: 100px; height: 100px;" ;>
                    <img src="assets/images/profile/user-1.jpg" alt="" class="w-100 h-100">
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="fs-5 mb-0 fw-semibold">Mathew Anderson</h5>
                <p class="mb-0 fs-4">Designer</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
        tabindex="0">
        <div class="row">
          <div class="col-lg-5">
            <div class="card shadow-none border">
              <div class="card-body">
                <h4 class="fw-semibold mb-3">Introduction</h4>
                <p>Hello, I am Mathew Anderson. I love making websites and graphics. Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit.</p>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex align-items-center gap-3 mb-4">
                    <i class="ti ti-briefcase text-dark fs-6"></i>
                    <h6 class="fs-4 fw-semibold mb-0">Sir, P P Institute Of Science</h6>
                  </li>
                  <li class="d-flex align-items-center gap-3 mb-4">
                    <i class="ti ti-mail text-dark fs-6"></i>
                    <h6 class="fs-4 fw-semibold mb-0">xyzjonathan@gmail.com</h6>
                  </li>
                  <li class="d-flex align-items-center gap-3 mb-4">
                    <i class="ti ti-device-desktop text-dark fs-6"></i>
                    <h6 class="fs-4 fw-semibold mb-0">www.xyz.com</h6>
                  </li>
                  <li class="d-flex align-items-center gap-3 mb-2">
                    <i class="ti ti-map-pin text-dark fs-6"></i>
                    <h6 class="fs-4 fw-semibold mb-0">Newyork, USA - 100001</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="card">
              <div class="card-body">

                <form id="profileEdit" class="mt-4">
                  <div class="form-group form-box">
                    <label id="form-label" class="form-label">Name</label>
                    <input type="text" id="name" class="form-control" name="name">
                    <p  id="name-error" class="error" for="name"></p>

                    <label id="form-label" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" name="email">
                    <p  id="email-error" class="error" for="name"></p>
                    <label id="form-label" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" name="password">
                    <p  id="password-error" class="error" for="name"></p>
                  </div>
                  <div class="mt-4">
                    <button type="submit" class="btn mb-1 waves-effect waves-light btn-primary">Update</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>

<?php include 'partials/footer.php';?>