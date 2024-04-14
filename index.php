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
    session_start();

    // Improved handling of cookies and sessions
    if (!isset($_SESSION['visit_count'])) {
        $_SESSION['visit_count'] = 1; // Initialize the session visit counter
    } else {
        $_SESSION['visit_count']++; // Increment the session visit counter
    }

    // Secure cookie operations
    $userVisitCount = $_COOKIE['visit_count'] ?? 0; // Use null coalescing operator to handle unset cookie
    $userVisitCount++;
    setcookie('visit_count', $userVisitCount, [
        'expires' => time() + 3600 * 24 * 30, // 30 days
        'path' => '/', // Effective across the entire domain
        'secure' => true, // Cookie is sent over HTTPS only
        'httponly' => true // Cookie is not accessible via JavaScript (mitigating XSS)
    ]);

    if (isset($_GET['logout'])) {
        // Clear session data
        session_unset();
        session_destroy();
        // Clear the user cookie
        setcookie('visit_count', '', time() - 3600, '/');
        // Redirect to the homepage
        header("Location: index.php");
        exit; // Always call exit after header redirection
    }
    ?>

    <!-- Logo and Navigation Bar -->
    <img src="images/logo.png" alt="Lambda Chi Alpha Logo" width="150" height="150">
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

    <!-- Page Heading and Content -->
    <h1>Welcome to Lambda Chi Alpha at URI</h1>
    <div>
        <p>You have visited this page <?php echo $_SESSION['visit_count']; ?> times in this session.</p>
        <p>Total visits (stored in cookies): <?php echo htmlspecialchars($userVisitCount); ?></p>
        <p>Lambda Chi Alpha at URI, known as the Zeta Eta chapter, offers a dynamic fraternity life filled with opportunities for personal growth and skill development.</p>
        <p>We invite you to discover our commitment to brotherhood, leadership, and community engagement.</p>
    </div>
    <img src="images/fraternity_house.jpg" alt="Lambda Chi Alpha Fraternity House" width="500" height="300">
    
    <!-- Author Details -->
    <footer>
        <p>Author: Nicholas Faciano</p>
        <p>Email: <a href="mailto:nfaciano@uri.edu">nfaciano@uri.edu</a></p>
    </footer>
</body>
</html>
