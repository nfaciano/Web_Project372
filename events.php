<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lambda Chi Alpha - Events</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include 'include/database-connection.php';
    include 'Event.php';
    include 'validate.php';

    $events = Event::getAllEvents($pdo);

    $name = $email = $selectedEvent = "";
    $errors = ["name" => "", "email" => "", "event" => ""];
    $successMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $selectedEvent = htmlspecialchars($_POST["event"]);

        $errors["name"] = validateName($name) ? "" : "Invalid name.";
        $errors["email"] = validateEmail($email) ? "" : "Invalid email.";
        $errors["event"] = validateEvent($selectedEvent) ? "" : "Invalid event.";

        if (implode("", $errors) === "") {
            $userStmt = $pdo->prepare("SELECT user_id FROM users WHERE user_email = :email");
            $userStmt->execute(['email' => $email]);

            $userId = $userStmt->fetchColumn();

            if (!$userId) {
                $pdo->prepare("INSERT INTO users (user_name, user_email) VALUES (:name, :email)")
                    ->execute(['name' => $name, 'email' => $email]);

                $userId = $pdo->lastInsertId();
            }

            $eventStmt = $pdo->prepare("SELECT event_id FROM events WHERE event_name = :event");
            $eventStmt->execute(['event' => $selectedEvent]);

            $eventId = $eventStmt->fetchColumn();

            if ($userId && $eventId) {
                $pdo->prepare("INSERT INTO registrations (user_id, event_id, registration_date) 
                               VALUES (:user_id, :event_id, NOW())")
                    ->execute(['user_id' => $userId, 'event_id' => $eventId]);

                $successMessage = "Registration successful!";
            }
        }
    }
    ?>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="merchandise.php">Merchandise</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
    </nav>

    <h1>Upcoming Events</h1>
    <section id="eventsList">
        <?php
        foreach ($events as $event) {
            echo "<div class='event'>";
            echo "<h3>" . htmlspecialchars($event->title) . "</h3>";
            echo "<p>Date: " . htmlspecialchars($event->date) . "</p>";
            echo "<p>Location: " . htmlspecialchars($event->location) . "</p>";
            echo "<p>" . htmlspecialchars($event->description) . "</p>";
            echo "<form method='POST'>";
            echo "<input type='hidden' name='event' value='" . htmlspecialchars($event->title) . "'>";
            echo "<input type='text' name='name' placeholder='Your Name' value='" . htmlspecialchars($name) . "'>";
            echo "<input type='email' name='email' placeholder='Your Email' value='" . htmlspecialchars($email) . "'>";
            echo "<button type='submit'>Register</button>";
            echo "</form>";
            echo "</div>";
        }
        ?>
    </section>

    <?php if ($successMessage): ?>
        <script>alert('<?php echo $successMessage; ?>');</script>
    <?php endif; ?>
</body>
</html>
