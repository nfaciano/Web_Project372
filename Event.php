<?php
// Event.php

class Event {
    // Properties
    public $title;
    public $date;
    public $location;
    public $description;

    // Constructor
    public function __construct($title, $date, $location, $description) {
        $this->title = $title;
        $this->date = $date;
        $this->location = $location;
        $this->description = $description;
    }

    // Method to simulate registering for an event
    public function register($attendeeName) {
        // Logic to register the attendee
        return $attendeeName . " has registered for " . $this->title;
    }

    // Method to check if the event can accept more registrations
    public function checkAvailability() {
        // Logic to check availability
        return true;
    }
}
