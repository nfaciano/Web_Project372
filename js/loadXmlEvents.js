function loadXmlEvents() {
    $.ajax({
        type: "GET",
        url: "https://nfaciano.rhody.dev/web_projects372/data/events.xml",
        dataType: "xml",
        success: function(xml) {
            var content = "";
            $(xml).find('event').each(function() {
                var title = $(this).find('title').text();
                var date = $(this).find('date').text();
                var location = $(this).find('location').text();
                content += `<div><h3>${title}</h3><p>Date: ${date}</p><p>Location: ${location}</p></div>`;
            });
            $("#eventsList").html(content);
        },
        error: function() {
            $("#eventsList").html("An error occurred while loading the events.");
        }
    });
}
