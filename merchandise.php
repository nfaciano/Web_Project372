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
        $merch1 = new MerchandiseItem("Lambda Chi T-Shirt", 25.00, 100);
        echo "<h2>" . $merch1->name . "</h2>";
        echo "<p>Price: $" . $merch1->price . "</p>";
        echo "<p>Stock: " . $merch1->getStock() . "</p>";
        // ... Add more merchandise items as needed ...
        ?>
    </section>

    <div id="new-arrivals"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




</body>
</html>
