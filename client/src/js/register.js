import {API} from "./config/config";

$(function registerUser() {
    $('form').on('submit', function (e) {
      e.preventDefault();
      $.ajax({
        type: 'POST',
        //url: 'http://localhost:30103/register.php',
        url: API+'login.php',
        crossOrigin: true,
        data: $(this).serialize(),
        dataType: 'json',
        success: function (data) {
            console.log(data);
            var url = '../index.html';
            switch (data[0]) {
                case 0:
                    var string = '<div class="alert alert-success" role="alert">'+'<h5>Registration successful!</h5>'+'<p>You will be redirected in 2 seconds...</p></div>';
                    break;
                case 1:
                    var string = '<div class="alert alert-warning" role="alert">'+'<h5>Email already used!</h5>'+'<p>You will be redirected in 2 seconds...</p></div>';
                    var url = './register.html';
                    break;
                case 2:      
                    var string = '<div class="alert alert-warning" role="alert">'+'<h5>Username already used!</h5>'+'<p>You will be redirected in 2 seconds...</p></div>';
                    var url = './register.html';
                    break;              
            }         
            setTimeout(function () {
                window.location.href = url;
            }, 2000);     
            document.getElementById('user-info').innerHTML = string;        
        },
        error: function (data) {
            alert('Error');
            console.log(data);
        }
      });
    });
});