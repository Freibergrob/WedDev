var url = window.location.href.split("site")[0] + "site/api/userCheckApi.php";
var userResponse = "";
function getUser(user) {
    $.ajax({
        url: url,
        type: "POST",
        data: { user: user },
        async: false,
        dataType: "json",
        success: function(response) {
            userResponse = response;
        },
        error: function(error) {
            console.log(response.responseText);
        }
    });
}

function validate() {
    var p = document.getElementById("password");
    var c = document.getElementById("confirm_password");
    var u = document.getElementById("username");
    var errC1 = document.getElementById("confirmErr");
    errC1.innerHTML = "";
    var errC2 = document.getElementById("usernameErr");
    errC2.innerHTML = "";

    if (p.value != c.value) {
        var err = document.getElementById("confirmErr");
        err.innerHTML = "Password Mismatch!";
        return false;
    }
    getUser(u.value);
    if (userResponse == "found" || userResponse == "error") {
        var err = document.getElementById("usernameErr");
        err.innerHTML = "Username Taken!";
        return false;
    }

    //Password length requirements?  Password contains requirements?

    return true;
}
