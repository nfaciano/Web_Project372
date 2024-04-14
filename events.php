<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda Chi Alpha - Events</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/events.css">
</head>
<body>
    <?php
    include 'Event.php'; 
    include 'validate.php'; // This will include the validation functions

    // Initialize variables
    $name = $email = $selectedEvent = "";
    $errors = ["name" => "", "email" => "", "event" => ""];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize input
        $name = htmlspecialchars($_POST["name"] ?? "");
        $email = htmlspecialchars($_POST["email"] ?? "");
        $selectedEvent = htmlspecialchars($_POST["event"] ?? "");

        // Validate inputs
        $errors["name"] = validateName($name) ? "" : "Invalid name. Please enter a valid name.";
        $errors["email"] = validateEmail($email) ? "" : "Invalid email. Please enter a valid email.";
        $errors["event"] = validateEvent($selectedEvent) ? "" : "Please select a valid event.";

        // Check for errors
        if (implode("", $errors) === "") {
            // Process the registration here
            echo "<p>Thank you for registering!</p>";
        }
    }
    ?>

    <img src="images/logo.png" alt="Lambda Chi Alpha Logo" width="150" height="150">
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="merchandise.php">Merchandise</a></li>
            <li><a href="donate.html">Donate</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
        </ul>
    </nav>

    <h1>Upcoming Events</h1>

    <section id="eventsList">
        <?php
        $events = [
            new Event("Day at the Estate", "2024-09-20", "Estate Grounds", "A lovely day at the estate."),
            new Event("Wing Night", "2024-09-22", "Local Pub", "Enjoy a night of wings and fun."),
            new Event("Bid Day", "2024-09-27", "Chapter House", "Join us for the excitement of bid day.")
        ];

        foreach ($events as $event) {
            echo "<div class='event'>";
            echo "<h3>" . htmlspecialchars($event->title) . "</h3>";
            echo "<p>Date: " . htmlspecialchars($event->date) . "</p>";
            echo "<p>Location: " . htmlspecialchars($event->location) . "</p>";
            echo "<p>" . htmlspecialchars($event->description) . "</p>";
            echo "<form method='POST' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
            echo "<input type='hidden' name='event' value='" . htmlspecialchars($event->title) . "'>";
            echo "<input type='text' name='name' placeholder='Your Name' value='" . $name . "'>";
            echo "<input type='email' name='email' placeholder='Your Email' value='" . $email . "'>";
            echo "<button type='submit'>Register</button>";
            echo "</form>";
            echo "</div>";
        }
        ?>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
