$(document).ready(function() {
    // Optionally, automatically load HTML events when the page loads
    // loadHtmlEvents();

    // Binding event handlers for buttons
    $('#loadHtmlBtn').click(loadHtmlEvents); // Handler for loading HTML content directly

    $('#loadXmlBtn').click(loadXmlEvents); // Handler for loading XML content

    $('#loadJsonBtn').click(loadJsonEvents); // Handler for loading JSON content

    $('#loadHtmlJQueryBtn').click(loadHtmlWithJQuery); // Handler for loading HTML content with jQuery effects
});
