<?php include 'partials/sidebar.php';?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Habibi&display=swap" rel="stylesheet">


<button class="btn btn-outline-danger" id="downloadButton">Download as PDF</button>


<div class="body-wrapper">

    <?php include 'partials/navbar.php';?>
    <div class="container-fluid">

        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Download Certificate</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                                        href="index">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">user list</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="assets/images/breadcrumb.png" alt="" class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .certificate {
                position: relative;
                height: 646px;
                background-image: url('../user/assets/images/certificate-frame.jpg');
                background-size: 100%;
                background-repeat: no-repeat;
                background-size: cover;

            }

            .heading-box {
                padding: 33px 0px;
            }

            .heading-box h2 {
                font-size: 46px;
                color: #fff;
                font-family: 'Habibi', serif;
            }

            .heading-box h6 {
                font-size: 20px;
                color: #fff;
                font-family: 'Habibi', serif;
            }

            .detail-box {
                padding: 71px 0px;
                display: flex;
                align-items: center;
                flex-direction: column;
                font-family: 'Habibi', serif;
            }

            .detail-box h2 {
                font-family: 'Ephesis', cursive;
                font-size: 60px;

            }

            .detail-box .course-name {
                font-weight: 900;
                font-size: 18px;
                color: #000;
            }

            .detail-box .date {
                font-weight: 900;
                font-size: 18px;
                color: #000;
            }

            .sign-logo {
                position: absolute;
                bottom: 0;
                right: 0;
            }
            .sign-logo .sign{
                max-width: 84px;
            }
            .sign-logo .logo{
                max-width: 160px;
            }
            .sign-logo h2{
                font-size: 19px;
            }
            .sign-logo h6{
                font-size: 11px;
            }
            
        </style>



        <button class="btn btn-outline-danger" id="downloadButton">Download as PDF</button>


        <div class="container card ">
            <div class="card-body">
                <div id="certificate" class="certificate">
                    <div class="text-center heading-box">
                        <h2>CERTIFICATE</h2>
                        <h6>OF TRAINING COMPLETION</h6>
                    </div>

                    <div class="detail-box">
                        <p>This Certificate is proudly presented to</p>
                        <h2>Sharon mentegoz</h2>
                        <p>For completing the course <span class="course-name"> PLS_cyber Security Awarness</span>
                            on <span class="date">26/07/23</span> </p>
                    </div>


                    <div class="sign-logo">
                        <div>
                            <img class="sign" src="assets/images/sign.png" alt="">
                            <h2>Muhammed Al Malabari</h2>
                            <h6>General Manager Powerline Solutions</h6>
                        </div>
                        <div class="">
                            <img  class="logo" src="assets/images/logo/logo.png" alt="">
                        </div>
                    </div>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
                <script>
                    document.getElementById('downloadButton').addEventListener('click', function () {
                        // Get the content of the div
                        const divContent = document.getElementById('certificate');

                        // Set the options for pdf conversion
                        const options = {
                            margin: 10,
                            filename: 'certificate.pdf',
                            image: { type: 'jpeg', quality: 0.98 },
                            html2canvas: { scale: 2 },
                            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
                        };

                        // Generate the PDF
                        html2pdf().from(divContent).set(options).save();
                    });
                </script>

            </div>

        </div>


    </div>
</div>
</div>



<?php include 'partials/footer.php';?>