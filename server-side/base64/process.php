<?php
  if( isset($_POST['type']) ) {
    /*
     * ถ้า $_POST['type'] มีค่า จากนั้นประกาศตัวแปร .....
     */
    $type = $_POST['type'];
    $message = $_POST['message'];
  }
  else {
    // อื่น ๆ จะบังคับ Redirect ไปยัง index.php
    header("location: ./index.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Result</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <?php
    if ($type === "encoding") {
      $result = base64_encode($message); // ฟังก์ชัน base64_encode() ทำการ encode Base64
      echo "<h1>Base64 Encoding</h1>";
      echo "<h2>Result</h2>";
      echo "<pre>$result</pre>";
    }
    else if ($type === "decoding") {
      $result = base64_decode($message); // ฟังก์ชัน base64_decode() ทำการ decode Base64
      echo "<h1>Base64 Decoding</h1>";
      echo "<h2>Result</h2>";
      echo "<pre>$result</pre>";
    }
  ?>
  <a href="./index.php">Back</a>
</body>
</html>
