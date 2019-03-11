<?php
$products = array
  (
    array("Microfiber Beach Towel", 40, 2),
    array("Flip-flop Sandals", 30, 5),
    array("Sunscreen 80SPF", 25, 3),
    array("Plastic Flying Disc", 15, 4),
    array("Beach Umbrella", 75, 1)
  );
  
  echo json_encode($products[rand(0,4)]);

?>


