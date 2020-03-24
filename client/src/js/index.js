$(document).ready(function () {});

$(function showUserInfo() {
    $('form').on('submit', function (e) {
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'http://localhost:30003/login.php',
        crossOrigin: true,
        data: $(this).serialize(),
        dataType:"json",
        success: function (data) {
            console.log(data); 
            if(data[0].username != null && data[0].email != null)              
                document.getElementById('user-info').innerHTML = 'Username: '+ data[0].username +' Email: '+ data[0].email;            
            else
                document.getElementById('user-info').innerHTML = '<h3>Your account does not exist</h3>';              
        },
        error: function () {
            alert('Error');
        }
      });
    });
});