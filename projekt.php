<?php
$xml = simplexml_load_file('gamequotes.xml');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      body {
        background-image: url('Img/background.jpg'); 
        background-size: cover; 
        background-repeat: no-repeat; 
        background-attachment: fixed; 
      }
      .character-cell {
        position: relative;
      }
      .character-cell img {
        display: none;
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1000;
        width: 215px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: white;
        padding: 5px;
      }
      .character-cell:hover img {
        display: block;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Projekt - Branimir Pučar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="games.php">Games</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container col-8">
    <table class="table table-warning table-bordered mt-5 mb-5">
      <thead class="table-dark">
        <tr>
          <th>Character</th>
          <th>Game</th>
          <th>Quotes</th>
        </tr>
      </thead>
            <tbody>
                <?php foreach ($xml->Character as $Character): ?>
                    <tr>
                        <td class="character-cell">
                            <?php echo $Character->Character; ?>
                            <img src="Img/<?php echo $Character->Character; ?>.jpg" alt="<?php echo $Character->Character; ?>">
                        </td>
                        <td><?php echo $Character->Game; ?></td>
                        <td><?php echo $Character->Quote; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
  </body>
</html>