<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>PHP ex4p5</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">

  </div>
  <!-- header -->
  <header>
    <div class="jumbotron">
      <h1 class="display-3">PHP ex4p5</h1>
      <p class="lead"> Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
      <hr class="my-2">
    </header>
    <!-- main -->
    <main class="text-center">
      <!-- utilisation d'un tableau array -->
      <?php
        $months = array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
        $months[7]= 'août';
         echo $months[7];
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
