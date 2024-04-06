<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Corrected viewport meta tag below -->
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
            <li><a href="events.html">Events</a></li>
            <li><a href="merchandise.html">Merchandise</a></li>
            <li><a href="donate.html">Donate</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
        </ul>
    </nav>
    
    <h1>Lambda Chi Alpha Merchandise</h1>
    
    
    <section id="merchandise-container">
    <?php
    $merchandiseItems = new MerchandiseItem("Lambda Chi T-Shirt", 25.00, 100, "images/logo.png");
    foreach ($merchandiseItems as $item) {
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/loadXmlMerch.js"></script>
    <script src="js/merchandise.js"></script>



</body>
</html>
