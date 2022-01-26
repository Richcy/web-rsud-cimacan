function registerValidation(){
  var name = $('#name').val();
  var phone = $('#phone').val();
  var email = $('#email').val();
  var password = $('#password').val();
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 

  if (name == '') {
    $("#error-name-message").removeClass("hidden");
    $("#name").focus();
    return false;
  }else{
    $("#error-name-message").addClass("hidden");
  }


  if (phone == '') {
    $("#error-phone-message").removeClass("hidden");
    $("#phone").focus();
    return false;
  }else{
    $("#error-phone-message").addClass("hidden");
  }

  if (email == '') {
    $("#error-email-message").removeClass("hidden");
    $("#error-emailformat-message").addClass("hidden");
    $("#email").focus();
    return false;
  }else{
    $("#error-email-message").addClass("hidden");
    if(email.match(mailformat)){ 
      $("#error-emailformat-message").addClass("hidden");
    }else{
      $("#error-emailformat-message").removeClass("hidden");
      $("#email").focus();
      return false;
    }
  }

  if (password == '') {
    $("#error-password-message").removeClass("hidden");
    $("#error-passwordlength-message").addClass("hidden");
    $("#password").focus();
    return false;
  }else{
    $("#error-password-message").addClass("hidden");
    if (password.length < 8) {
      $("#error-passwordlength-message").removeClass("hidden");
      $("#password").focus();
      return false;
    }else{
      $("#error-passwordlength-message").addClass("hidden");
    }
  }

  if (grecaptcha.getResponse() == '') {
    $("#error-captcha-message").removeClass("hidden");
    $("#captcha").focus();
    return false;
  }else{
    $("#error-captcha-message").addClass("hidden");
  }

  
}