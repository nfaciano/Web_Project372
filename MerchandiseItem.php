<?php
class MerchandiseItem {
    public $name;
    public $price;
    public $stock;
    public $imagePath;

    public function __construct($name, $price, $stock, $imagePath) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock; // Corrected
        $this->imagePath = $imagePath;
    }

    public function getImagePath() {
        return $this->imagePath;
    }

    public static function getAllMerchandiseItems(PDO $pdo) {
        if (!$pdo) {
            throw new Exception("Invalid PDO instance."); // Ensure a valid PDO instance
        }

        $stmt = $pdo->query("SELECT * FROM merchandise");
        $items = [];

        while ($row = $stmt->fetch()) {
            $items[] = new MerchandiseItem(
                $row['item_name'],
                $row['item_price'],
                $row['item_stock'],
                $row['item_img_url']
            );
        }

        return $items;
    }
}
?>
