<?php
class MerchandiseItem {
    public $id;
    public $name;
    public $price;
    public $stock;
    public $imagePath;

    public function __construct($id, $name, $price, $stock, $imagePath) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        $this->imagePath = $imagePath;
    }

    public static function getAllMerchandiseItems(PDO $pdo) {
        $stmt = $pdo->query("SELECT * FROM merchandise");
        $items = [];

        while ($row = $stmt->fetch()) {
            $items[] = new MerchandiseItem(
                $row['item_id'],
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
