/*
$(document).ready(function () {

});
*/

function registerRedirect () {
  location.href = "./html/register.html";
}

var register_button = "<div class='centered button-padding'><button class='btn btn-light' onclick='registerRedirect()'>Sign up</button></div>";

$(function showUserInfo() {
    $('form').on('submit', function (e) {
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'http://localhost:30003/login.php',
        crossOrigin: true,
        data: $(this).serialize(),
        dataType: 'json',
        success: function (data) {
            if(data[0].username != null && data[0].email != null)
              var string = '<div class="alert alert-success" role="alert">'+'<h5>Login done!</h5>'+'Username: '+ data[0].username +'<br>Email: '+ data[0].email+'</div>';
            else
              var string = '<div class="alert alert-warning" role="alert">'+'<h5>Your account does not exist</h5>'+'</div>';    
            document.getElementById('user-info').innerHTML = string + register_button;        
        },
        error: function () {
            alert('Error');
            var string = '<div class="alert alert-danger" role="alert">'+'<h3>An error has occurred</h3>'+'</div>';
            document.getElementById('user-info').innerHTML = string;
        }
      });
    });
});