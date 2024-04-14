<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda Chi Alpha - Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    // Start the session
    session_start();

    // Create or update a session variable
    if (!isset($_SESSION['visit_count'])) {
        $_SESSION['visit_count'] = 0;
    }
    $_SESSION['visit_count']++;

    // Check if the cookie exists, else set a new cookie
    $userVisitCount = 0;
    if (isset($_COOKIE['visit_count'])) {
        $userVisitCount = (int) $_COOKIE['visit_count'];
    }
    $userVisitCount++;
    setcookie('visit_count', $userVisitCount, time() + 3600 * 24 * 30); // Expire in 30 days

    // Handling logout and session termination
    if (isset($_GET['logout'])) {
        session_unset();
        session_destroy();
        setcookie('visit_count', "", time() - 3600); // Deleting the cookie
        header("Location: index.html");
    }
    ?>

    <!-- Logo -->
    <img src="images/logo.png" alt="Lambda Chi Alpha Logo" width="150" height="150">

    <!-- Navigation Bar -->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="merchandise.php">Merchandise</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="?logout">Logout</a></li>
        </ul>
    </nav>

    <!-- Page Heading -->
    <h1>Welcome to Lambda Chi Alpha at URI</h1>

    <!-- Displaying session and cookie data -->
    <div>
        <p>You have visited this page <?php echo $_SESSION['visit_count']; ?> times in this session.</p>
        <p>Total visits (stored in cookies): <?php echo htmlspecialchars($userVisitCount); ?></p>
    </div>

    <!-- Content -->
    <div>
        <p>Lambda Chi Alpha at URI, known as the Zeta Eta chapter, offers a dynamic fraternity life filled with opportunities for personal growth and skill development.</p>
        <p>We invite you to discover our commitment to brotherhood, leadership, and community engagement. Dive into our website to uncover our mission, learn about upcoming events, and find out how you can join or support our endeavors.</p>
    </div>

    <!-- Additional Image -->
    <img src="images/fraternity_house.jpg" alt="Lambda Chi Alpha Fraternity House" width="500" height="300">

    <!-- Author Details -->
    <footer>
        <p>Author: Nicholas Faciano</p>
        <p>Email: <a href="mailto:nfaciano@uri.edu">nfaciano@uri.edu</a></p>
    </footer>
</body>
</html>
