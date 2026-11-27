<?php

namespace fatih\Marketplace;

require_once('./propertyconstant.php');

use fatih\Marketplace\Produk;

class jasa {
use Produk;
    public function payment($tipe) {
        return match ($tipe) {
            "virtual" => "Virtual Account",
            "qris" => "QRIS",
            default => "hanya bisa va dan qris"
        };
    }
}