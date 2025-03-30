function checkLogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "admin" && password === "problem@123") {
        window.location.href = "dashboard.html";
        return false;
    } else {
        alert("Invalid Username or Password");
        return false;
    }
}

