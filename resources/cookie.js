if (document.cookie != "cookies-accepted=true") {
    document.getElementById("cookie-banner").style.display = "block";
}
document.getElementById("accept-cookies").addEventListener("click", function () {
    document.cookie = "cookies-accepted=true; expires=Fri, 31 Dec 9999 23:59:59 GMT";
    document.getElementById("cookie-banner").style.display = "none";
});