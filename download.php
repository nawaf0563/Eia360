<?php
$CSVfp = fopen("https://nawaf0563.github.io/Eia360/Analytics-Export.csv", "r");
if($CSVfp !== FALSE) {
 while(! feof($CSVfp)) {
  $data = fgetcsv($CSVfp, 1000, ",");
  print_r($data);
 }
}
fclose($CSVfp);
?>
