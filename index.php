<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/256/10393/10393287.png">
  <title>Php Badwords</title>
</head>

<body>
  <div class="container">
    <h2 class="mt-5">Form di Censura</h2>
    <form action="process.php" method="post" class="mt-3">
      <div class="form-group">
        <label for="paragraph">Inserisci un paragrafo:</label>
        <textarea id="paragraph" name="paragraph" class="form-control" rows="4" cols="50"></textarea>
      </div>
      <div class="form-group mt-2 ">
        <label for="word">Parola da censurare:</label>
        <input type="text" id="word" name="word" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary mt-3 ">Invia</button>
    </form>
  </div>
</body>

</html>