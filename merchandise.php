<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchandise - Lambda Chi Alpha</title>
    <link rel="stylesheet" href="css/merchandise.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'MerchandiseItem.php'; ?>
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
    
    <h1>Lambda Chi Alpha Merchandise</h1>
    <section id="merchandise-container">
    <?php
    $xml = simplexml_load_file('https://nfaciano.rhody.dev/web_projects372/data/merchandise.xml');

    foreach ($xml->item as $item) {
        $name = (string) $item->name;
        $price = floatval(substr((string) $item->price, 1)); // Assuming price prefixed with $
        $imagePath = (string) $item->imgUrl;

        echo "<div class='merchandise-item'>";
        echo "<img src='" . htmlspecialchars($imagePath) . "' alt='" . htmlspecialchars($name) . "' class='merchandise-img'>";
        echo "<h3>" . htmlspecialchars($name) . "</h3>";
        echo "<p>Price: $" . number_format($price, 2) . "</p>";
        // Order form for each item
        echo "<form action='process_order.php' method='post'>";
        echo "<input type='hidden' name='item_name' value='" . htmlspecialchars($name) . "'>";
        echo "<input type='hidden' name='item_price' value='" . htmlspecialchars($price) . "'>";
        echo "<label for='quantity_" . htmlspecialchars($name) . "'>Quantity:</label>";
        echo "<input type='number' id='quantity_" . htmlspecialchars($name) . "' name='quantity' min='1' max='10' value='1'>";
        echo "<button type='submit'>Add to Cart</button>";
        echo "</form>";
        echo "</div>";
    }
    ?>
    </section>
    <!-- Optional JavaScript for additional functionality -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/merchandise.js"></script>
</body>
</html>
