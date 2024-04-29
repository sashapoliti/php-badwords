<?php
$paragraph = $_GET['paragraph'];
$word = $_GET['word'];
$len_par = strlen($paragraph);
$censored_paragraph = str_replace($word, '***', $paragraph);
$len_par_cen = strlen($censored_paragraph);
?>

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
  <title>Php Badwords - Results</title>
</head>

<body>
  <main>
    <div class="container">
      <?php
      echo "<h2 class='mt-5'>Paragrafo originale:</h2>
      <p>$paragraph</p>
      <h5>Lunghezza paragrafo: $len_par</h5>
      
      <h2 class='mt-5'>Paragrafo censurato:</h2>
      <p>$censored_paragraph</h2>
      <h5>Lunghezza paragrafo: $len_par_cen</h5>";
      ?>
  </main>
</body>

</html>