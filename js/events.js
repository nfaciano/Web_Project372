// Define an Event object using a function constructor
function Event(title, date, location) {
    this.title = title;
    this.date = date;
    this.location = location;
}

// Create instances of Event
const event1 = new Event("Spring Recruitment", "2024-03-01", "Campus Center");
const event2 = new Event("Alumni Dinner", "2024-04-22", "Local Banquet Hall");

// Function to display events using jQuery
function displayEvents() {
    const events = [event1, event2];
    let content = "";

    $.each(events, function(index, event) {
        content += `<div><h3>${event.title}</h3><p>Date: ${event.date}</p><p>Location: ${event.location}</p></div>`;
    });

    $("#eventsList").html(content);
}

$(document).ready(function() {
    displayEvents();
});
