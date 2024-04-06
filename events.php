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
    <?php include 'Event.php'; ?>
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
            new Event("Bid Day", "2024-09-27", "Chapter House", "Join us for the excitement of bid day 2.")
        ];

        foreach ($events as $event) {
            echo "<div class='event'>";
            echo "<h3>" . htmlspecialchars($event->title) . "</h3>";
            echo "<p>Date: " . htmlspecialchars($event->date) . "</p>";
            echo "<p>Location: " . htmlspecialchars($event->location) . "</p>";
            echo "<p>" . htmlspecialchars($event->description) . "</p>";
            echo "</div>";
        }
        ?>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/merchandise.js"></script>
    <!-- Your JavaScript files -->
</body>
</html>
