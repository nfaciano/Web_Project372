<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Merchandise - Lambda Chi Alpha</title>
    <link rel="stylesheet" href="css/merchandise.css">
</head>
<body>
    <?php
    include 'db_connection.php';
    include 'MerchandiseItem.php';

    $merchandiseItems = MerchandiseItem::getAllMerchandiseItems($pdo);
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

    <h1>Lambda Chi Alpha Merchandise</h1>

    <section id="merchandise-container">
        <?php
        foreach ($merchandiseItems as $merchItem) {
            echo "<div class='merchandise-item'>";
            echo "<img src='" . htmlspecialchars($merchItem->getImagePath()) . "' alt='" . htmlspecialchars($merchItem->name) . "'>";
            echo "<span class='merchandise-name'>" . htmlspecialchars($merchItem->name) . "</span>";
            echo "<span class='price-tag'>$" . number_format($merchItem->price, 2) . "</span>";
            echo "</div>";
        }
        ?>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
