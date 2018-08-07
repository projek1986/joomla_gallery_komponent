
window.onload = function(){
    document.getElementById("img").onclick = function(){
        sprawdzFormularz();
        document.getElementById("portfolio").show();
    }
}

function sprawdzFormularz(){
    zadanie = "";
    zadanie = new XMLHttpRequest();
    var poleEmail = document.getElementById("email").value;
    var url = "gallery.php?task=" + poleEmail;
    zadanie.open("GET", url, true);
    zadanie.send();
}