function kasutabAJAXit() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("copyright").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "info.txt", true);
    xhttp.send();
}