// events.js
$(document).ready(function() {
    loadHtmlEvents(); // Call this directly or bind to an event

    // For demonstration, binding XML, JSON, and jQuery HTML loaders to buttons
    document.getElementById('loadXmlBtn').addEventListener('click', loadXmlEvents);
    document.getElementById('loadJsonBtn').addEventListener('click', loadJsonEvents);
    $('#loadHtmlJQueryBtn').click(loadHtmlWithJQuery); // jQuery style for event binding
});
