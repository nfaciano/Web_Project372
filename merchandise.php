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

    // Array to hold MerchandiseItem objects
    $merchandiseItems = [];
    
    // Iterate through each item in the XML
    foreach ($xml->item as $item) {
        $name = (string) $item->name;
        $price = floatval(substr((string) $item->price, 1)); // Assuming the price is prefixed with a dollar sign
        $stock = 100; // Assuming a default stock value, as it's not specified in the XML
        $imagePath = (string) $item->imgUrl;
    
        // Create a new MerchandiseItem object and add it to the array
        $merchandiseItems[] = new MerchandiseItem($name, $price, $stock, $imagePath);
    }
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

    <div id="new-arrivals"></div>
    <!-- Optional JavaScript for additional functionality -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
