<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $quantity = $_POST['quantity'];
  // Process the quantity as needed, e.g., store it in a database, perform calculations, etc.
  echo "Quantity submitted: " . $quantity;
}
?>
