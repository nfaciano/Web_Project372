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
            <li><a href="events.html">Events</a></li>
            <li><a href="merchandise.html">Merchandise</a></li>
            <li><a href="donate.html">Donate</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
        </ul>
    </nav>

    <!-- Page Heading -->
    <h1>Upcoming Events</h1>

     <!-- Events Content -->
     <section id="eventsList">
        <?php
        $event1 = new Event("Charity Run", "2023-04-30", "Campus Grounds", "Join us for a run!");
        echo "<h2>" . $event1->title . "</h2>";
        echo "<p>Date: " . $event1->date . "</p>";
        echo "<p>Location: " . $event1->location . "</p>";
        echo "<p>Description: " . $event1->description . "</p>";
        // ... Add more events as needed ...
        ?>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>


</body>
</html>
