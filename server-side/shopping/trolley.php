<?php
  if( !isset($_POST['name']) ) {
    header("location: ./index.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Trolley | Online Shopping</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h1>Trolley</h1>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $apple_quantity = intval($_POST['apple']);
        $pineapple_quantity = intval($_POST['pineapple']);
        $orange_quantity = intval($_POST['orange']);

        if (isset($apple_quantity) && $apple_quantity > 0) {
          $apple_total = $apple_quantity * 3.00;
          $apple_total = number_format($apple_total, 2, '.', '');
          echo "<tr>" .
               "<td>Apple</td>" .
               '<td class="price">$3.00</td>' .
               "<td class=\"price\">$apple_quantity</td>" .
               "<td class=\"price\">$$apple_total</td>" .
               "</tr>";
        }

        if (isset($pineapple_quantity) && $pineapple_quantity > 0) {
          $pineapple_total = $pineapple_quantity * 3.50;
          $pineapple_total = number_format($pineapple_total, 2, '.', '');
          echo "<tr>" .
               "<td>Pineapple</td>" .
               '<td class="price">$3.50</td>' .
               "<td class=\"price\">$pineapple_quantity</td>" .
               "<td class=\"price\">$$pineapple_total</td>" .
               "</tr>";
        }

        if (isset($orange_quantity) && $orange_quantity > 0) {
          $orange_total = $orange_quantity * 2.74;
          $orange_total = number_format($orange_total, 2, '.', '');
          echo "<tr>" .
               "<td>Orange</td>" .
               '<td class="price">$2.74</td>' .
               "<td class=\"price\">$orange_quantity</td>" .
               "<td class=\"price\">$$orange_total</td>" .
               "</tr>";
        }

      ?>
    </tbody>
  </table>

  <h2>Shipping Address</h2>
  <h3>Name:</h3>
  <?php
    $name = $_POST['name'];
    echo $name;
  ?>
  <h3>Address:</h3>
  <?php
    $address = $_POST['address'];
    echo $address;
  ?>
</body>
</html>