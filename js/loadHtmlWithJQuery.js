// loadHtmlWithJQuery.js
function loadHtmlWithJQuery() {
    $("#eventsList").load("../data/jquery-content.html", function(response, status, xhr) {
        if (status == "error") {
            alert("Error loading the HTML: " + xhr.status + " " + xhr.statusText);
        } else {
            // Optionally, add animations or additional jQuery effects here
            $(this).hide().fadeIn(1000);
        }
    });
}
