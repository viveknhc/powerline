<?php include 'partials/sidebar.php';?>

<div class="body-wrapper">

  <?php include 'partials/navbar.php';?>
  <div class="container-fluid">

    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
      <div class="card-body px-4 py-3">
        <div class="row align-items-center">
          <div class="col-9">
            <h4 class="fw-semibold mb-8">User Profile</h4>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-muted " href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">User Profile</li>
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
    <div class="card overflow-hidden">
      <div class="card-body p-0">
        <img src="assets/images/backgrounds/profilebg.jpg" alt="" class="img-fluid">
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
                <form class="mt-4">
                  <div class="form-group form-box">
                    <label id="form-label" class="form-label">Name</label>
                    <input type="text" id="form-input" class="form-control">

                    <label id="form-label" class="form-label">Email</label>
                    <input type="text" id="form-input" class="form-control">

                    <label id="form-label" class="form-label">Password</label>
                    <input type="text" id="form-input" class="form-control">
                  </div>
                  <div class="mt-4">
                    <button type="button" class="btn mb-1 waves-effect waves-light btn-primary">
                      Primary
                    </button>
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