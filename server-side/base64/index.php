<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Base64 Encoder/Decoder</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1>Base64 Encoder</h1>
  <form method="POST" action="/base64/process.php">
    <input type="hidden" name="type" value="encoding" />
    <div>
      <textarea name="message" rows="5" cols="100"></textarea>
    </div>
    <div>
      <input type="submit" value="Encode" />
    </div>
  </form>
  <hr />
  <h1>Base64 Decoder</h1>
  <form method="POST" action="/base64/process.php">
    <input type="hidden" name="type" value="decoding" />
    <div>
      <textarea name="message" rows="5" cols="100"></textarea>
    </div>
    <div>
      <input type="submit" value="Decode" />
    </div>
  </form>
</body>
</html>