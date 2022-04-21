<?php
  $paginanaam = "";
  if(isset($_GET["pagina"])) {
    $paginanaam = $_GET["pagina"];
  } else {
    $paginanaam = "home";
  }
?>

<body>

<nav class="navbar navbar-expand-sm bg-white">
  <div class="container-fluid">
  <img src="Img/Logo.jpg" alt="Foto" class="Mainfoto navbar-brand rounded-circle" style="width: 50px"/> 
    <a class="navbar-brand fw-bold">Spyservice <br> <div class="darkblue">International</div></a>
    <button class="navbar-toggler bg-black" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse menubalk" id="collapsibleNavbar" style="text-transform: uppercase;">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($paginanaam == "home") { echo"active"; }?>" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($paginanaam == "overOns") { echo"active"; }?>" href="overOns">Over ons bedrijf</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($paginanaam == "documentPagina") { echo"active"; }?>" href="documentPagina">Documenten</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($paginanaam == "contact") { echo"active"; }?>" href="contact">Contact</a>
        </li>  
        
      </ul>
    </div>
  </div>
</nav>

</body>