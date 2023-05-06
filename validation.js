// This is a validation script built using the jQuery-validate library
$().ready(function () {

  // Validate signup form on keyup and submit
  $("#signup").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 8,
        alphanumeric: true,
      },
      password_confirmation: {
        required: true,
        equalTo: "#password",
      },
    },
    messages: {
      name: "Required field",
      email: {
        required: "Required field",
        email: "Enter a valid email",
      },
      password: {
        required: "Required field",
        minlength: "Password should be at least 8 characters long",
        alphanumeric:
          "Password must contain at least one letter and one number - Only alphanumeric charecters",
      },
      password_confirmation: {
        required: "Required field",
        equalto: "Password must match",
      },
    },
  });
});

// Definesa method to validate passwors that contains numbers and letters only
$.validator.addMethod(
  "alphanumeric",
  function (value, element) {
    return this.optional(element) || /^[a-z0-9]+$/i.test(value);
  },
  "Letters and numbers only please."
);
