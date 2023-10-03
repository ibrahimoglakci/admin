
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

$(document).ready(function () {
  $('#login-form').submit(function (e) {
    e.preventDefault();
    const spinner = '<span class="spinner-border flex-shrink-0" role="status"><span class="visually-hidden">Loading...</span></span>';
    let formData = new FormData(this); // Doğru kullanımı
    formData.append('type', 'login_form');
    const button = $("#login-submit");
    langData = [];
    

    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 2000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })
  
      message = "Signed in successfully";
      errormessage = "Incorrect Username or Password.";
      buttonText = "Sign in";
    
  


    $.ajax({
      url: 'front-end/auth/back-end/ajax.php',
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {

        if (response == "ok") {

          button.prop("disabled", true);
          button.addClass("btn-load");
          button.text("");
          button.append(spinner);
          setTimeout(function () {
            Toast.fire({
              icon: 'success',
              title: message
            })
            setTimeout(function () {
              window.location.href = "/admin/";

            }, 2000);

          }, 2000);
        }
        else if(response != "empty"){

         
          button.prop("disabled", true);
          button.addClass("btn-load");
          button.text("");
          button.append(spinner);
          setTimeout(function () {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: errormessage
            })
            button.prop("disabled", false);
            button.removeClass("btn-load");
            button.text(buttonText);


          }, 2000);


        }
      },
      error: function (xhr) {
        window.location.href = '/admin/login';
      }
    });
  });
});

/* function submitForm() {
  const form = document.getElementById("login-form");
  const spinner = '<span class="spinner-border flex-shrink-0" role="status"><span class="visually-hidden">Loading...</span></span>';
  event.preventDefault();
  const formData = new FormData(form);
  formData.append("type", "login_form");
 


  $.ajax({
    url: 'front-end/auth/back-end/ajax.php',
    type: 'POST',
    data: formData,
    processData: false,
    contentType: false,
    success: function (response) {

      if (response == "ok") {

        button.prop("disabled", true);
        button.addClass("btn-load");
        button.text("");
        button.append(spinner);
        setTimeout(function () {
          Toast.fire({
            icon: 'success',
            title: message
          })
          setTimeout(function () {
            window.location.href = "/admin/";

          }, 2000);

        }, 2000);
      }
      else if (response == "error") {


        button.prop("disabled", true);
        button.addClass("btn-load");
        button.text("");
        button.append(spinner);
        setTimeout(function () {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: errormessage
          })
          button.prop("disabled", false);
          button.removeClass("btn-load");
          button.text(buttonText);


        }, 2000);


      }
    },
    error: function (xhr) {
      window.location.href = '/admin/login';
    }
  });

}
 */

function submitLockForm() {
  const form = document.getElementById("lock-screen-form");
  const spinner = '<span class="spinner-border flex-shrink-0" role="status"><span class="visually-hidden">Loading...</span></span>';
  event.preventDefault();
  const formData = new FormData(form);
  formData.append("type", "lock_screen");
  formData.append("token", getCookie("u_t"));
  const button = $("#lock-submit");


  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })

    message = "Signed in successfully";
    errormessage = "Incorrect Username or Password.";
    buttonText = "Sign in";
  
  



  $.ajax({
    url: 'front-end/auth/back-end/ajax.php',
    type: 'POST',
    data: formData,
    processData: false,
    contentType: false,
    success: function (response) {

      if (response == "ok") {

        button.prop("disabled", true);
        button.addClass("btn-load");
        button.text("");
        button.append(spinner);
        setTimeout(function () {
          Toast.fire({
            icon: 'success',
            title: message
          })
          setTimeout(function () {
            window.location.href = "/admin/";

          }, 2000);

        }, 2000);
      }
      else if (response == "error") {


        button.prop("disabled", true);
        button.addClass("btn-load");
        button.text("");
        button.append(spinner);
        setTimeout(function () {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: errormessage
          })
          button.prop("disabled", false);
          button.removeClass("btn-load");
          button.text(buttonText);


        }, 2000);


      }
    },
    error: function (xhr) {
      window.location.href = '/admin/login';
    }
  });

}
