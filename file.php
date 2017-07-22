<html>
<body>
  <?php
  $file = fopen("uptime.txt", "r") or die("error");
  $ftxt = fread($file, filesize("uptime.txt"));
  echo "Uptime: ".$ftxt."<3";
  fclose($file);
   ?>

</body>
</html>
