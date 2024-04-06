<?php
// MerchandiseItem.php

class MerchandiseItem {
    // Properties
    public $name;
    public $price;
    protected $stock; // Protected property
    public $imagePath; // New property for image path

    // Constructor
    public function __construct($name, $price, $stock, $imagePath) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        $this->imagePath = $imagePath; // Set the image path in the constructor
    }

    // Method to simulate purchasing an item
    public function purchase($quantity) {
        if ($this->stock >= $quantity) {
            $this->stock -= $quantity;
            return "Purchased $quantity of " . $this->name;
        } else {
            return "Not enough stock for " . $this->name;
        }
    }

    // Getter for the protected stock property
    public function getStock() {
        return $this->stock;
    }

    // Setter for the protected stock property
    public function setStock($newStock) {
        $this->stock = $newStock;
    }

    // Getter for the image path
    public function getImagePath() {
        return $this->imagePath;
    }
}
