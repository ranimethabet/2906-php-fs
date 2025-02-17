<?php
## 9. Verify if a string is a valid hexadecimal color code (e.g., #ff5733).



$pattern = "/^#([\da-f]{6}|[\da-f]{3})$/i";

$colors = ['#ff5733', '#FFF', '#123ABC', 'red','#1d'];
// Valid - Valid - Valid - invalid

foreach ($colors as $color) {
  echo "$color ➜ " . (preg_match($pattern, $color) ? "Valid" : "Invalid") . "<br>";
}
