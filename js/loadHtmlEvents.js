// loadHtmlEvents.js
function loadHtmlEvents() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("eventsList").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "../data/events-data.html", true);
    xhr.send();
}
