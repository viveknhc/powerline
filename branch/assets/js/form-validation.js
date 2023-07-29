// ADD USER IN MANUAL

$(document).ready(function () {
    $("#add-user-form").validate({
      rules: {
        empId: "required",
        name: "required",
        email: {
          required: true,
          email: true
        },
        phone: {
          required: true,
          number: true
        },
        address: "required",
        passportNumber: "required"
      },
      messages: {
        empId: "Please enter employee Id",
        name: "Please enter your name",
        email: {
          required: "Please enter your email",
          email: "Please enter a valid email address"
        },
        phone:{
          required:"Please enter phone number",
          phone:"Please enter valid "
        },
        passportNumber:"Please enter passport number"
      },

      highlight: function (element, errorClass, validClass) {
        $(element).addClass("is-invalid");
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass("is-invalid");
      }

    });
    $("#adduser-btn").on("click", function (event) {
      if (!$("#add-user-form").valid()) {
        event.preventDefault();
      }
    });
  });


// ADD USER IN EXCEL

$(document).ready(function (){
    $("#excel-addUser").validate({
        rules:{
            excelDoc:"required",
        }
    });

    $("#addUser-excelbtn").on("click", function (event) {
        if (!$("#excel-addUser").valid()) {
          event.preventDefault();
        }
      });
})