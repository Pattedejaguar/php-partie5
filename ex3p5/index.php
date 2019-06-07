<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>PHP ex3p5</title>
</head>
<body>
  <!-- container Bootstrap -->
      <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron">
          <h1 class="display-3">PHP ex3p5</h1>
          <p class="lead">afficher la valeur >5 du tableau
          <hr class="my-2">
        </div>
    </header>
    <!-- main -->
    <main class="text-center">
      <?php
      $tableau = ['janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre'];
       echo 'index numéro 5 '.$tableau[5];
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
