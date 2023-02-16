<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewpot" content="device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
<?php
echo date("Y-m-d H:i:s")."<br />";

echo date("Y-m-d H:i:s", time()- 60*60*24)."<br />";

echo date("F j Y H:i:s")."<br />";
?>

  </body>
  </html>
