function loadJsonEvents() {
    $.getJSON("https://nfaciano.rhody.dev/web_projects372/data/events.json", function(data) {
        var content = "";
        $.each(data, function(key, event) {
            content += `<div><h3>${event.title}</h3><p>Date: ${event.date}</p><p>Location: ${event.location}</p></div>`;
        });
        $("#eventsList").html(content);
    }).fail(function() {
        $("#eventsList").html("An error occurred while loading the events.");
    });
}
