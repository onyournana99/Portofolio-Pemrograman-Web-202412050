<?php
$ukuran_baju = "L";

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran Baju: Small (S)";
        break;
    case "M":
        echo "Ukuran Baju: Medium (M)";
        break;
    case "L":
        echo "Ukuran Baju: Large (L)";
        break;
    case "XL":
        echo "Ukuran Baju: Extra Large (XL)";
        break;
    default:
        echo "Ukuran Baju tidak tersedia";
}
?>