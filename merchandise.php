<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Merchandise - Lambda Chi Alpha</title>
    <link rel="stylesheet" href="css/merchandise.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include 'include/database-connection.php';
    include 'MerchandiseItem.php';

    $merchandiseItems = MerchandiseItem::getAllMerchandiseItems($pdo);
    ?>
    <img src="images/logo.png" alt="Lambda Chi Alpha Logo" width="150" height="150">
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

    <h1>Lambda Chi Alpha Merchandise</h1>

    <section id="merchandise-container">
        <?php
        foreach ($merchandiseItems as $merchItem) {
            echo "<div class='merchandise-item'>";
            echo "<img src='" . htmlspecialchars($merchItem->getImagePath()) . "' alt='" . htmlspecialchars($merchItem->name) . "' class='merchandise-img-hover'>";
            echo "<div class='overlay-info'>";
            echo "<span class='merchandise-name'>" . htmlspecialchars($merchItem->name) . "</span>";
            echo "<span class='price-tag'>$" . number_format($merchItem->price, 2) . "</span>";
            echo "</div>";
            echo "</div>";
        }
        ?>
        </section>
        ?>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/merchandise.js"></script>
</body>
</html>
