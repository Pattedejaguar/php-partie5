<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>ex10p5</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="jumbotron">
        <h1 class="display-3">PHP ex10p5</h1>
        <p class="lead">Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
          Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département </p>
          <hr class="my-2">
        </div>
      </header>
      <!-- main -->
      <main class="row justify-content-center">
      <?php
      $areaList = array(
        59 => 'Nord',
        62 => 'Pas-de-Calais',
        2  => 'Aisne',
        60 => 'Oise',
        80 => 'Somme',
      );
      ?>
        <table class="table table-bordered table-hover">
          <caption>Département des Hauts de France</caption>
          <thead>
           <th>Code Postal</th>
           <th>Nom de département</th>
          </thead>
          <tbody>
          <?php
            foreach($areaList as $zipCode => $area){ ?>
              <tr>
                <td><?= $zipCode ?></td>
                <td><?= $area ?></td>
              </tr>
          <?php } ?>
          </tbody>
        </table>
       </main>
      <footer>
      </footer>
    </div>
    <!-- scripts JQuery Popper et Bootstrap-->
    <script src="assets/js/jquery-3.4.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- mon script principal -->
    <script src="assets/js/main.js"></script>
  </body>
  </html>
