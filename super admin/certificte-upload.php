<?php include 'partials/sidebar.php';?>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Habibi&display=swap" rel="stylesheet">

<div class="body-wrapper">

    <?php include 'partials/navbar.php';?>

    <div class="container-fluid">



        <div class="card">
            <div class="card-body">

                <form>
                    <div class="row">

                        <div class="col-lg-6 pb-3">
                            <div class="form-group">
                                <label class="form-label">Qr Code</label>
                                <input id="qrcodeId" oninput="qrcode()" type="file" class="form-control">
                            </div>
                        </div>


                        <div class="col-lg-6 pb-3">
                            <div class="form-group">
                                <label class="form-label">Signed By</label>
                                <input id="signedBy" oninput="signedByName()" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6 pb-3">
                            <div class="form-group">
                                <label class="form-label">Designation</label>
                                <input id="designationId" oninput="designation()" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6 pb-3">
                            <div class="form-group">
                                <label class="form-label">Signature</label>
                                <input id="signatureId" oninput="signature()" type="file" class="form-control">
                            </div>
                        </div>


                        <div class="col-lg-6 pb-3">
                            <div class="form-group">
                                <label class="form-label">Copany Logo</label>
                                <input id="companyLogoId" oninput="companyLogo()" type="file" class="form-control">
                            </div>
                        </div>





                    </div>

                    <div class="text-center pt-5">
                        <button class="btn btn-outline-danger">Submit</button>
                    </div>
                </form>

            </div>
        </div>


        <div class="container card ">
            <div class="card-body">
                <div id="content" class="certificate">


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
                            padding: 75px 0px;
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
                            right: 61px;

                        }

                        .sign-logo .sign {
                            max-width: 84px;
                        }

                        .sign-logo .logo {
                            max-width: 160px;
                        }

                        .sign-logo h2 {
                            font-size: 19px;
                        }

                        .sign-logo h6 {
                            font-size: 11px;
                        }

                        .seal-logo {
                            position: absolute;
                            display: flex;
                            bottom: 0;
                            left: 55px;
                            padding-bottom: 14px;
                        }

                        .seal-logo img {
                            height: 83px;
                            max-width: 86px;
                        }

                        .downloadbtn {
                            background-image: linear-gradient(to right, #00d2ff 0%, #3a7bd5 51%, #00d2ff 100%);

                            text-transform: uppercase;
                            transition: 0.5s;
                            background-size: 200% auto;
                            color: white;
                            box-shadow: 0 0 20px #eee;
                            border-radius: 10px;

                        }

                        .downloadbtn:hover {
                            background-position: right center;

                            color: #fff;
                            text-decoration: none;
                        }
                    </style>


                    <div class="text-center heading-box">
                        <h2>CERTIFICATE</h2>
                        <h6>OF TRAINING COMPLETION</h6>
                    </div>

                    <div class="detail-box">
                        <p class="m-0">This Certificate is awarded to</p>
                        <h2 id="userName">Sharon mentegoz</h2>
                        <p>For completing the course
                            on</p>
                        <span id="courseName" class="course-name"> PLS_cyber Security Awarness</span>
                        <p>completed on<span class="date ms-2">26 july 2023</span></p>
                    </div>

                    <div class="seal-logo">
                        <div class="me-2">
                            <img src="assets/images/seal.jpg" alt="">
                        </div>

                        <div class="me-2">
                            <img id="qrcodeImg" src="assets/images/qrcode.jpg" alt="">
                        </div>
                    </div>

                    <div class="sign-logo row">
                        <div>
                            <img class="sign" id="signatureImg" src="assets/images/sign.png" alt="">
                            <h2 id="signedtext">Muhammed Al Malabari</h2>
                            <h6 id="designationtext">General Manager Powerline Solutions</h6>
                            <div class="">
                                <img class="logo" id="companyLogoImg" src="assets/images/logo/logo.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>




                <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

                <script>



                    function signedByName() {
                        var signedName = document.getElementById("signedBy");
                        console.log(signedBy)
                        var signedtextname = document.getElementById("signedtext");
                        signedtextname.innerText = signedName.value;
                    }


                    function qrcode() {
                        var imageInput = document.getElementById("qrcodeId");
                        var displayImage = document.getElementById("qrcodeImg");

                        if (imageInput.files && imageInput.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                displayImage.src = e.target.result;
                                displayImage.style.display = "inline"; // Show the image
                            };
                            reader.readAsDataURL(imageInput.files[0]);
                        }
                    }

                    function designation() {
                        var designationInput = document.getElementById("designationId");
                        console.log(designationInput)
                        var designationBox = document.getElementById("designationtext");
                        designationBox.innerText = designationInput.value;
                    }


                    function signature() {
                        var imageInput = document.getElementById("signatureId");
                        var displayImage = document.getElementById("signatureImg");

                        if (imageInput.files && imageInput.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                displayImage.src = e.target.result;
                                displayImage.style.display = "inline"; // Show the image
                            };
                            reader.readAsDataURL(imageInput.files[0]);
                        }
                    }

                    function companyLogo() {
                        var imageInput = document.getElementById("companyLogoId");
                        var displayImage = document.getElementById("companyLogoImg");

                        if (imageInput.files && imageInput.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                displayImage.src = e.target.result;
                                displayImage.style.display = "inline"; // Show the image
                            };
                            reader.readAsDataURL(imageInput.files[0]);
                        }
                    }



                </script>

                <script>
                    document.getElementById('downloadButton').addEventListener('click', function () {
                        // Get the content of the div
                        const divContent = document.getElementById('content');

                        // Set the options for pdf conversion
                        const options = {
                            margin: 10,
                            filename: 'content.pdf',
                            image: { type: 'jpeg', quality: 0.98 },
                            html2canvas: { scale: 2 },
                            jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' }
                        };

                        // Generate the PDF
                        html2pdf().from(divContent).set(options).save();
                    });
                </script>

            </div>

        </div>


    </div>
</div>





<?php include 'partials/footer.php';?>