// USER PROFILE VALIDATION

$(document).ready(function () {
    $("#profileEdit").validate({
      rules: {
        name: "required",
        email: {
          required: true,
          email: true
        },
        password: "required"
      },
      messages: {
        name: "Please enter your name",
        email: {
          required: "Please enter your email",
          email: "Please enter a valid email address"
        }, 
        password: "Please enter your password"
      }, 

      highlight: function (element, errorClass, validClass) {
        // Add the 'is-invalid' class to the invalid input element
        $(element).addClass("is-invalid");
      },
      unhighlight: function (element, errorClass, validClass) {
        // Remove the 'is-invalid' class from the valid input element
        $(element).removeClass("is-invalid");
      }

    });
  });