import { API } from "./config/config.js";

document.getElementById('register-button').onclick = function () {
  window.location.href = "./html/register.html";
};

document.getElementById('main-title').onclick = function () {
  window.location.href = ".";
};

$(function showUserInfo() {
    $('form').on('submit', function (e) {
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: API+'login.php',
        crossOrigin: true,
        data: $(this).serialize(),
        dataType: 'json',
        success: function (data) {
            console.log(data);
            if(data[0].username != null && data[0].email != null){
              let string = '<div class="alert alert-success" role="alert">'+'<h5>Login done!</h5>'+'Username: '+ data[0].username +'<br>Email: '+ data[0].email+'</div>';
              document.getElementById('user-info').innerHTML = string;
            }
            else{
              let string = '<div class="alert alert-warning" role="alert">'+'<h5>Incorrect credentials!</h5>'+'<p>You will be redirected in 2 seconds...</p></div>';
              document.getElementById('user-info').innerHTML = string;
              setTimeout(function () {
                window.location.href = ".";
              }, 2000);
            }               
        },
        error: function (data) {
          console.log(data);
          alert('Error');
          let string = '<div class="alert alert-danger" role="alert">'+'<h3>An error has occurred</h3>'+'</div>';
          document.getElementById('user-info').innerHTML = string;
        }
      });
    });
});