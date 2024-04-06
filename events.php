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
    <!-- Logo -->
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

    <!-- Page Heading -->
    <h1>Upcoming Events</h1>

     <!-- Events Content -->
     <section id="eventsList">
    <?php
    $events = [new Event("Charity Run", "2023-04-30", "Campus Grounds", "Join us for a run ride!")];
    foreach ($events as $event) {
        echo "<div>";
        echo "<h3>" . htmlspecialchars($event->title) . "</h3>";
        echo "<p>" . htmlspecialchars($event->date) . "</p>";
        echo "<p>" . htmlspecialchars($event->location) . "</p>";
        echo "<p>" . htmlspecialchars($event->description) . "</p>";
        echo "</div>";
    }
    ?>
</section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src=" js/events.js"></script>
    <script src="js/loadHtmlEvents.js"></script>

</body>
</html>
