<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>ex8p5</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="jumbotron">
        <h1 class="display-3">PHP ex8p5</h1>
        <p class="lead">Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. </p>
        <hr class="my-2">
      </div>
    </header>
    <!-- main -->
    <main class="text-center">
      <?php
        $months = array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
        // on mesure la taille du tableau
        foreach($months as $month){
      ?>
        <p><?= $month ?></p>
      <?php
        }
      ?>
    </main>
          <!-- footer -->
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
