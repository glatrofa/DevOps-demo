function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

function setUserInfo(){
    var username = getUrlVars()["username"];
    var email = getUrlVars()["email"];
    if (username && email) document.getElementById("user_info").innerHTML = "<p>Username: "+ username +"<br>Email: "+ email +"</p>";
    else document.getElementById("user_info").innerHTML = "<h3>Accesso non eseguito</h3>";
}     