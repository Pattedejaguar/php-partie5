<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>ex7P4</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="jumbotron">
        <h1 class="display-3">PHP ex7p5</h1>
        <p class="lead">Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
        <hr class="my-2">
      </div>
    </header>
    <!-- main -->
    <main class="text-center">
      <?php
        $area = array(
          '59' => 'Nord',
          '62' => 'Pas-de-Calais',
          '02' => 'Aisne',
          '60' => 'Oise',
          '80' => 'Somme',
        );
        $area['51'] = 'Marne';
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
