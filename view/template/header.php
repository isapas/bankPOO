<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <header class="jumbotron jumbotron-fluid mb-0">
      <div class="container">
        <h1 class="display-4 d-flex justify-content-center">Une banque, de l'argent</h1>
        <p class="lead d-flex justify-content-center">Solution de gestion de comptes</p>
      </div>
    </header>
    <nav class="bg-danger">
      <ul class="nav mb-5 container">
        <li class="nav-item">
          <a class="nav-link text-white" <?php setHref("") ?>>Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" <?php setHref("addAccount") ?>>Ajout compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" <?php setHref("deposit") ?>>Dépot</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" <?php setHref("transfer") ?>>Virement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" <?php setHref("withdrawal") ?>>Retrait</a>
        </li>
      </ul>
    </nav>

    <main class="container">
