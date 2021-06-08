<?php 

  include __DIR__ . './assets/data/data.php';

  /* var_dump($database); */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <header>
    <img src="assets/img/51rttY7a+9L.png" alt="">
    <select name="" id="">
      <option value="default">Seleziona un genere</option>
      <option value="rock">Rock</option>
    </select>
  </header>
  <main>
    <div class="wrapper">
      <div class="row gx-5 justify-content-center align-items-center">
        <?php foreach($database as $disco){ ?>
        <div class="disco col-4 col-lg-4">
          <div>
            <img class="img-fluid d-block" src="<?php echo $disco['poster']; ?>" alt="">
            <span><?php echo $disco['title']; ?></span>
            <span><?php echo $disco['year']; ?></span>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </main>
</body>
</html>