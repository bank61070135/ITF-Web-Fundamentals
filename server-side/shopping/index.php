<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Online Shopping</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h1>Online Shopping</h1>
  <form method="POST" action="trolley.php">
    <div class="row">
      <div class="column">
        <div>
          <img src="images/apple.jpg" alt="apple">
        </div>
        <h4>Apple</h4>
        <h4>$3.00</h4>
        <div>
          Quantity: <input type="number" name="apple" value="0" min="0" />
        </div>
      </div>
      <div class="column">
        <div>
          <img src="images/pineapple.jpg" alt="pineapple">
        </div>
        <h4>Pineapple</h4>
        <h4>$3.50</h4>
        <div>
          Quantity: <input type="number" name="pineapple" value="0" min="0" />
        </div>
      </div>
      <div class="column">
        <div>
          <img src="images/orange.jpg" alt="orange">
        </div>
        <h4>Orange</h4>
        <h4>$2.74</h4>
        <div>
          Quantity: <input type="number" name="orange" value="0" min="0" />
        </div>
      </div>
    </div>
    <div class="center-box mg-t">
      <h2>Shipping Address</h2>
      <div>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required />
      </div>
      <div class="mg-t">
        <label for="address">Address: </label>
        <textarea name="address" id="address" rows="4" cols="40" required></textarea>
      </div>
      <div>
        <button class="btn" type="submit">View Trolley</button>
      </div>
    </div>
  </form>
</body>
</html>