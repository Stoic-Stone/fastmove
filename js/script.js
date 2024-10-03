let e = true;

function change() {
    if (e) {
        document.getElementById("password").setAttribute("type", "text");
        document.getElementById("eye").src = ".img/eye-open.png";
        e = false;
    } else {
        document.getElementById("password").setAttribute("type", "password");
        document.getElementById("eye").src = ".img/eye-close.png";
        e = true;
    }
}