<?php
  if( isset($_POST['type']) ) {
    $type = $_POST['type'];
    $message = $_POST['message'];
  }
  else {
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
      $result = base64_encode($message);
      echo "<h1>Base64 Encoding</h1>";
      echo "<h2>Result</h2>";
      echo "<pre>$result</pre>";
    }
    else if ($type === "decoding") {
      $result = base64_decode($message);
      echo "<h1>Base64 Decoding</h1>";
      echo "<h2>Result</h2>";
      echo "<pre>$result</pre>";
    }
  ?>
  <a href="./index.php">Back</a>
</body>
</html>
