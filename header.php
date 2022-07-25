<!DOCTYPE html>
<html>

    <title>HTML</title>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  rel="stylesheet" href="./css/style.css"/>
<body>

<?php if(basename($_SERVER['PHP_SELF']) !=="login.php") { ?>
<nav class="navbar navbar-expand-lg bg-white">
  <div class="container">
    <a class="navbar-brand" href="./"><img src="./images/setabid-logo.png"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./aukcijonas.php">Aukcijonai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pranešimai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mokėjimai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./profile.php">Profilis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pagalba</a>
        </li>
      </ul>
      <a href="./auction-create.php" class="d-flex btn btn-primary create-auction-btn"><img src="./images/createAuction-icon.png"/>Kurti aukcijoną</a>
      <a href="" class="d-flex btn btn-primary logout-btn"><img src="./images/logout-icon.png"/></a>
    </div>
  </div>
</nav>
<?php } ?>