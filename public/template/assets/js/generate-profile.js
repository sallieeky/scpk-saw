function COLOR() {
    var allchar = "0123456789ABCDEF";
    var randcol = "";
    for (var i = 0; i < 6; i++) {
        randcol += allchar[Math.floor(Math.random() * 16)];
    }
    document.getElementById("profileImage").style.backgroundColor =
        "#" + randcol;
}
/****************************/

$(document).ready(function () {
    var thumb =
        userName[0].charAt(0).toUpperCase() +
        userName[1].charAt(0).toUpperCase();
    $("#profileImage").text(thumb);
    COLOR();
});
