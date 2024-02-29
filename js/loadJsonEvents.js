// loadJsonEvents.js
function loadJsonEvents() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var events = JSON.parse(this.responseText);
            var content = "";
            for (var i = 0; i < events.length; i++) {
                content += `<div><h3>${events[i].title}</h3><p>Date: ${events[i].date}</p><p>Location: ${events[i].location}</p></div>`;
            }
            document.getElementById("eventsList").innerHTML = content;
        }
    };
    xhr.open("GET", "../data/events.json", true);
    xhr.send();
}
