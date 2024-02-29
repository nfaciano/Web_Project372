// loadXmlEvents.js
function loadXmlEvents() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var xml = this.responseXML;
            var events = xml.getElementsByTagName("event");
            var content = "";
            for (var i = 0; i < events.length; i++) {
                var title = events[i].getElementsByTagName("title")[0].childNodes[0].nodeValue;
                var date = events[i].getElementsByTagName("date")[0].childNodes[0].nodeValue;
                var location = events[i].getElementsByTagName("location")[0].childNodes[0].nodeValue;
                content += `<div><h3>${title}</h3><p>Date: ${date}</p><p>Location: ${location}</p></div>`;
            }
            document.getElementById("eventsList").innerHTML = content;
        }
    };
    xhr.open("GET", "../data/events.xml", true);
    xhr.send();
}
