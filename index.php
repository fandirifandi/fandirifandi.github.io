<?php
//koneksi
session_start();
include "koneksi.php";

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TOPSIS</title>
    <!--bootstrap-->
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

    <!--menu-->
    <nav class="navbar navbar-inverse navbar-custom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">DSS TOPSIS</a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="kriteria.php">Criteria</a>
            </li>
            <li>
              <a href="alternatif.php">Alternatif</a>
            </li>
            <li>
              <a href="poin.php">Poin</a>
            </li>
            <li>
              <a href="nilmat.php">Matrix Score</a>
            </li>
            <li>
              <a href="hastop.php">Topsis Result</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron">
      <div class="container">
        <h1>Hello! Guide To Use This WEB!</h1>
        <p>This is Decision Support System WEB <br> It helps to choose the most outstanding student!</p>
          <p><a class="btn btn-primary btn-lg" href="kriteria.php" role="button">Start</a></p>
      </div>
    </div>

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
