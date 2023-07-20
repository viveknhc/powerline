<?php include 'partials/sidebar.php';?>

<link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />
<div class="body-wrapper">

  <?php include 'partials/navbar.php';?>



  <style>
    .tab-menu .tab {
      color: #000;
    }

    /* Styling for the tab content */
    .tab-content {
      display: none;

    }

    /* Style to disable pointer events on inactive tabs */
    .tab-menu .tab:not(.active) {
      pointer-events: none;
      opacity: 0.6;
      /* Optionally, reduce the opacity of inactive tabs for visual indication */
    }

    .tab-menu .tab:not(.active) .hide-menu::after {
      content: "\1F512";
      display: inline-block;
      margin-left: 5px;
      font-size: 12px;
      position: absolute;
      right: 0;
    }
    .tab-content h3{
      color: #2e3192;
      font-weight: 800;
    }
  </style>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 col-12">
        <div class="card">
          <div class="">
            <!-- TAB VIDEOS AND EXAMS -->
            <div class="tab-content">

              <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                <div class="card-body px-4 py-3">
                  <div class="row align-items-center">
                    <div class="col-9">
                      <h4 class="fw-semibold mb-8">Video Classes And Exams</h4>
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="index">Dashboard</a></li>
                          <li class="breadcrumb-item" aria-current="page">class room</li>
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


<!-- 
              <div class="p-4">
                <h3>Video Class name</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim at, odit quasi accusamus esse am</p>
              </div> -->
              <div style="padding:56.25% 0 0 0;position:relative;">
               

                <iframe
                  src="https://player.vimeo.com/video/846834231?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                  frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                  style="position:absolute;top:0;left:0;width:100%;height:100%;" title="video (1080p)"></iframe></div>
              <script src="https://player.vimeo.com/api/player.js"></script>

            </div>
            <div class="tab-content">
              <div class="p-5">
                <div class="text-center pb-5">
                  <h3>Examination</h3>
                </div>

                <div>
                  <h5 class="pb-3">1.fdsjhbdjh fsdf usdbf sd fjsd fsdufjsdfdsu gkdjf g fdgfdgduognfu gfg dfugd fg udfjg
                    gdujfjg
                    fdgjfjg g</h5>

                  <div class="row">

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question1" id="exampleRadios1"
                          value="" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 1
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question1" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 2
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question1" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 3
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question1" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 4
                        </label>
                      </div>
                    </div>

                  </div>
                </div>

                <hr>

                <div>
                  <h5 class="pb-3">1.fdsjhbdjh fsdf usdbf sd fjsd fsdufjsdfdsu gkdjf g fdgfdgduognfu gfg dfugd fg udfjg
                    gdujfjg
                    fdgjfjg g</h5>

                  <div class="row">

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question2" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 1
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question2" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 2
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question2" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 3
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question2" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 4
                        </label>
                      </div>
                    </div>

                  </div>
                </div>

                <hr>

                <div>
                  <h5 class="pb-3">1.fdsjhbdjh fsdf usdbf sd fjsd fsdufjsdfdsu gkdjf g fdgfdgduognfu gfg dfugd fg udfjg
                    gdujfjg
                    fdgjfjg g</h5>

                  <div class="row">

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question3" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 1
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question3" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 2
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question3" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 3
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question3" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 4
                        </label>
                      </div>
                    </div>

                  </div>
                </div>

                <hr>

                <div>
                  <h5 class="pb-3">1.fdsjhbdjh fsdf usdbf sd fjsd fsdufjsdfdsu gkdjf g fdgfdgduognfu gfg dfugd fg udfjg
                    gdujfjg
                    fdgjfjg g</h5>

                  <div class="row">

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Quetion3" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 1
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Quetion3" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 2
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Quetion3" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 3
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Quetion3" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 4
                        </label>
                      </div>
                    </div>

                  </div>
                </div>

                <hr>

                <div>
                  <h5 class="pb-3">1.fdsjhbdjh fsdf usdbf sd fjsd fsdufjsdfdsu gkdjf g fdgfdgduognfu gfg dfugd fg udfjg
                    gdujfjg
                    fdgjfjg g</h5>

                  <div class="row">

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question4" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 1
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question4" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 2
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question4" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 3
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 px-5 py-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Question4" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                          Answer 4
                        </label>
                      </div>
                    </div>

                  </div>
                </div>


                <div class="text-center pt-5">
                  <button class="btn btn-primary">Submit</button>
                </div>

              </div>
            </div>
            <div class="tab-content">
             
              <div style="padding:56.25% 0 0 0;position:relative;">
                <iframe
                  src="https://player.vimeo.com/video/846834231?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                  frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                  style="position:absolute;top:0;left:0;width:100%;height:100%;" title="video (1080p)"></iframe></div>
              <script src="https://player.vimeo.com/api/player.js"></script>
            </div>
            <div class="tab-content">
              Second Chapter Exam
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-4 col-12">
        <div class="card">
          <div class="card-body">
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="init">
              <div class="simplebar-wrapper selected" style="margin: 0px -24px;">
                <div class="simplebar-height-auto-observer-wrapper">
                  <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask selected">
                  <div class="simplebar-offset selected" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper selected" tabindex="0" role="region"
                      aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                      <div class="simplebar-content selected">



                        <ul id="sidebarnav" class="tab-menu">
                          <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">CLASSES</span>
                          </li>
                          <li class="sidebar-item">
                            <a class="sidebar-link  has-arrow" href="#" aria-expanded="false">
                              <span class="d-flex">
                                <i class="ti ti-book"></i>
                              </span>
                              <span class="hide-menu">Chapter 1</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">

                              <li class="sidebar-item tab active">
                                <a class="sidebar-link ">
                                  <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                  </div>
                                  <span class="hide-menu">Video Class</span>
                                </a>
                              </li>

                              <li class="sidebar-item tab active">
                                <a class="sidebar-link position-relative">
                                  <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                  </div>
                                  <span class="hide-menu">Exam</span>
                                </a>
                              </li>

                            </ul>
                          </li>

                          <li class="sidebar-item">
                            <a class="sidebar-link  has-arrow" href="#" aria-expanded="false">
                              <span class="d-flex">
                                <i class="ti ti-book"></i>
                              </span>
                              <span class="hide-menu">Chapter 2</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                              <li class="sidebar-item tab active">
                                <a class="sidebar-link ">
                                  <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                  </div>
                                  <span class="hide-menu">Video Class</span>
                                </a>
                              </li>
                              <li class="sidebar-item tab">
                                <a class="sidebar-link ">
                                  <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                  </div>
                                  <span class="hide-menu">Exam</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>


                        <div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded">
                          <div class="d-flex">
                            <div class="unlimited-access-title">
                              <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Certificate is available</h6>
                              <button class="btn btn-primary fs-2 fw-semibold lh-sm">Download</button>
                            </div>
                            <div class="unlimited-access-img">
                              <img src="../../dist/images/backgrounds/rocket.png" alt="" class="img-fluid">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 3709px;"></div>
              </div>
              <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
              </div>
              <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                  style="height: 139px; transform: translate3d(0px, 77px, 0px); display: block;"></div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>


    <script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>


    <script>
      // Get all the tab menu items and tab content
      const tabItems = document.querySelectorAll('.tab');
      const tabContent = document.querySelectorAll('.tab-content');

      // Show the first tab content by default
      tabContent[0].style.display = 'block';

      // Add event listener to each tab menu item
      tabItems.forEach((tab, index) => {
        tab.addEventListener('click', () => {
          // Remove 'active' class from all tab menu items and tab content
          // tabItems.forEach((item) => item.classList.remove('active'));
          tabContent.forEach((content) => (content.style.display = 'none'));

          // Add 'active' class to the clicked tab menu item
          tab.classList.add('active');
          // Display the corresponding tab content
          tabContent[index].style.display = 'block';
        });
      });


      // Add event listener to video elements for 'ended' event
      const videos = document.querySelectorAll('iframe');
      videos.forEach((video, index) => {
        video.addEventListener('ended', () => {
          activateNextTab();
        });
      });
    </script>


  </div>
</div>
</div>

<?php include 'partials/footer.php';?>