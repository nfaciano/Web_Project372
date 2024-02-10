// Define an Event object
function Event(title, date, location) {
    this.title = title;
    this.date = date;
    this.location = location;
}

// Create instances of Event
const event1 = new Event("Spring Recruitment", "2024-03-01", "Campus Center");
const event2 = new Event("Alumni Dinner", "2024-04-22", "Local Banquet Hall");

// Function to display events
function displayEvents() {
    const events = [event1, event2];
    let content = "";

    // Loop through events and create HTML content
    events.forEach(event => {
        content += `<div><h3>${event.title}</h3><p>Date: ${event.date}</p><p>Location: ${event.location}</p></div>`;
    });

    // Output to HTML
    document.getElementById("eventsList").innerHTML = content;
}

// Call displayEvents on page load
document.addEventListener('DOMContentLoaded', displayEvents);
